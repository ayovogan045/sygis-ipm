<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once APPPATH . 'controllers/BaseController.php';

use entities\Permission;
use serviceImpl\PermissionService;

require_once APPPATH . 'models/serviceImpl/PermissionService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Permission entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class PermissionController extends BaseController {

    private $permissionService;
    private $permission_datalist;
    private $entity;
    private $wording;
    private $code;
    private $activeyear;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("permissionform"));

        $this->layout->assignOne('openlink', 'Administration');
        $this->layout->assignOne('activelink', 'Compte');
        $this->layout->assignOne('subactivelink', 'Liste de permission');

        $this->permissionService = new PermissionService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function permission() {
        $this->layout->assignOne('permissiondatalist', $this->list_permission());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Désactivation éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Désactivation echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('permission_id'));
        // show the template
        $this->layout->view('content/administration/account/permission/permissionpage.tpl');
    }

    //Permission
    //add a new permission to the database
    public function add_permission() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentPermission') > 0) {
            $this->doUpdate($this->session->userdata('currentPermission'));
            $this->session->set_userdata('currentPermission', 0);
        } else {
            //create an permission object
            $permission = new Permission($this->getWording(), $this->getCode(), null, $this->getActiveyear(), $this->getNormalStatus());
            if ($this->permissionService->getOneExist($permission) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new permission to database
                $this->crud->create($this->permissionService, $permission);
                $this->layout->assignOne('success', "Enrégistrement de l'année de prospection " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('permissiondatalist', $this->list_permission());
        // show the template
        $this->layout->view('content/administration/permission/permissionpage.tpl');
    }

    //edit and update the status of the current permission data to the database
    public function edit_permission($permission_id = 0) {
        $this->entity = $this->crud->findOne($this->permissionService, $this->decryptionId($permission_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('permission_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/permission'> abandonner</a> ");
            $this->permission();
        }
    }

    //update the status of the current academicyear data to the database
    public function active_permission($permission_id = 0) {
        $this->entity = $this->crud->findOne($this->permissionService, $this->decryptionId($permission_id));
        $activePermission = $this->permissionService->getActivated();
        if ($activePermission !== NULL) {
            $activePermission->setActiveyear(0);
//            $activePermission->setState($this->getUpdateStatus());
            $done = $this->crud->updateOne($this->permissionService, $this->decryptionId($permission_id));
            $this->session->set_userdata('done', $done);
        }
        if ($this->entity !== NULL) {
            $this->entity->setActiveyear(1);
//            $this->entity->setState($this->getUpdateStatus());
            $done = $this->crud->updateOne($this->permissionService, $this->entity);
            $this->session->set_userdata('done', $done);
            $this->layout->assignOne('success', "Activation de l'année de prospection " . $this->getWording() . ' éffectué avec succès ');
        }

        $this->layout->assignOne('permissiondatalist', $this->list_permission());
        // show the template
        $this->layout->view('content/administration/permission/permissionpage.tpl');
    }

    //update the status of the current academicyear data to the database
    public function desactive_permission($permission_id = 0) {
        $this->entity = $this->crud->findOne($this->permissionService, $this->decryptionId($permission_id));
        if ($this->entity !== NULL) {
            $this->entity->setActiveyear(0);
            $this->entity->setState($this->getUpdateStatus());
            $done = $this->crud->updateOne($this->permissionService, $this->entity);
            $this->session->set_userdata('done', $done);
            $this->layout->assignOne('success', "Désactivation de l'année de prospection " . $this->getWording() . ' éffectué avec succès ');
        }

        $this->layout->assignOne('permissiondatalist', $this->list_permission());
        // show the template
        $this->layout->view('content/administration/permission/permissionpage.tpl');
    }

//list the permission data from the database
    public function list_permission() {
        $this->permission_datalist = $this->crud->readSortAsc($this->permissionService, 'wording');
        return $this->permission_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['permissionwording']));
        $this->setCode(htmlspecialchars($_POST['permissioncode']));
        $this->setActiveyear(0);
        if (isset($_POST['permissionactivated'])) {
            $this->setActiveyear(1);
        }
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->permissionService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentPermission', $this->entity->getId());
            $this->session->set_userdata('permission_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('permissionwordingvalue', $entity->getWording());
            $this->layout->assignOne('permissioncodevalue', $entity->getCode());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->permissionService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        if ($this->permissionService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentPermission', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->permissionService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentPermission', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    function getActiveyear() {
        return $this->activeyear;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setActiveyear($activeyear) {
        $this->activeyear = $activeyear;
    }

}
