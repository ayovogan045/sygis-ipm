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

use entities\Role,
    entities\RolePermission;
use serviceImpl\RoleService;
use serviceImpl\PermissionService,
    serviceImpl\RolePermissionService;
use Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/serviceImpl/RoleService.php';
require_once APPPATH . 'models/serviceImpl/PermissionService.php';
require_once APPPATH . 'models/serviceImpl/RolePermissionService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Role entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class RoleController extends BaseController {

    private $roleService;
    private $permissionService;
    private $rolePermissionService;
    private $role_datalist;
    private $entity;
    private $wording;
    private $description;
    private $permissionlist;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignOne('addnewlink', 'administration/account/RoleController/newrole');
        $this->layout->assignOne('listlink', 'administration/account/RoleController/rolelist');
        $this->layout->assignAll($this->config->item("roleform"));

        $this->layout->assignOne('openlink', 'Administration');
        $this->layout->assignOne('activelink', '');
        $this->layout->assignOne('subactivelink', 'Edition de rôle');

        $this->roleService = new RoleService();
        $this->permissionService = new PermissionService();
        $this->rolePermissionService = new RolePermissionService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function role() {
        $this->layout->assignOne('roledatalist', $this->list_role());
//        $this->layout->assignOne('permissiondatalist', $this->crud->readSortAsc($this->permissionService, 'wording'));
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Désactivation éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Désactivation echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('role_id'));
        // show the template
        $this->layout->view('content/administration/account/role/rolelistpage.tpl');
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function newrole() {
        if ($this->session->userdata('role_id') != 0) {
            $permissionsForRole = new ArrayCollection($this->permissionService->getAllByRoleIdWithSortAndOrder($this->session->userdata('role_id')));
            $permissiondatalist = new ArrayCollection($this->crud->readSortAsc($this->permissionService, 'wording'));
            foreach ($permissionsForRole as $permission) {
                $permissiondatalist->removeElement($permission);
            }
            $this->layout->assignOne('permissionsForRole', $permissionsForRole);
            $this->layout->assignOne('permissiondatalist', $permissiondatalist);
            $this->editFields($this->session->userdata('role_id'));

            $this->layout->assignOne('addnewlink', '../../../../administration/account/RoleController/newrole');
            $this->layout->assignOne('listlink', '../../../../administration/account/RoleController/rolelist');
        } else {
            $this->layout->assignOne('permissiondatalist', $this->crud->readSortAsc($this->permissionService, 'wording'));

            $this->layout->assignOne('addnewlink', '../../../../index.php/administration/account/RoleController/newrole');
            $this->layout->assignOne('listlink', '../../../../index.php/administration/account/RoleController/rolelist');
        }
        // show the template
        $this->layout->view('content/administration/account/role/roleformpage.tpl');
    }

    //Role
    //add a new role to the database
    public function add_role() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentRole') > 0) {
            $this->doUpdate($this->session->userdata('currentRole'));
            $this->session->set_userdata('currentRole', 0);
        } else {
            //create an role object
            $role = new Role($this->getWording(), $this->getDescription(), $this->getNormalStatus());
            if ($this->roleService->getOneExist($role) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new role to database
                $this->crud->create($this->roleService, $role);
                $currentRole = $this->crud->findLast($this->roleService);
                $rolePermissions = new ArrayCollection();
                foreach ($this->getPermissionlist() as $permission) {
                    $rolePermissions->add(new RolePermission($permission, $currentRole, $this->getNormalStatus()));
                }
                $this->crud->createAll($this->rolePermissionService, $rolePermissions);
                $this->layout->assignOne('success', "Enrégistrement du rôle " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('roledatalist', $this->list_role());

        $this->layout->assignOne('addnewlink', '../index.php/administration/account/RoleController/newrole');
        $this->layout->assignOne('listlink', '../index.php/administration/account/RoleController/rolelist');
        // show the template
        $this->layout->view('content/administration/account/role/rolelistpage.tpl');
    }

    //list of role
    public function rolelist() {
        $this->layout->assignOne('roledatalist', $this->list_role());

        $this->layout->assignOne('addnewlink', '../../../../index.php/administration/account/RoleController/newrole');
        $this->layout->assignOne('listlink', '../../../../index.php/administration/account/RoleController/rolelist');
        // show the template
        $this->layout->view('content/administration/account/role/rolelistpage.tpl');
    }

    //edit and update the status of the current role data to the database
    public function edit_role($role_id = 0) {
        $this->entity = $this->crud->findOne($this->roleService, $this->decryptionId($role_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('role_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/role'> abandonner</a> ");
            $this->newrole();
        }
    }

//list the role data from the database
    public function list_role() {
        $this->role_datalist = $this->crud->readSortAsc($this->roleService, 'wording');
        return $this->role_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['rolewording']));
        $this->setDescription(htmlspecialchars($_POST['roledescription']));
        $this->setPermissionlist($this->crud->findAll($this->permissionService, $_POST['permissionselectedlist']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->roleService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentRole', $this->entity->getId());
            $this->session->set_userdata('role_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('rolewordingvalue', $entity->getWording());
            $this->layout->assignOne('roledescriptionvalue', $entity->getDescription());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->roleService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setDescription($this->getDescription());
        if ($this->roleService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentRole', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->roleService, $this->entity);
//            $this->crud->deleteAllByEntity($this->rolePermissionService, get_Class($this->entity));
            $this->rolePermissionService->deleteAllByRole($this->entity);
            $rolePermissions = new ArrayCollection();
            foreach ($this->getPermissionlist() as $permission) {
                $rolePermissions->add(new RolePermission($permission, $this->entity, $this->getNormalStatus()));
            }
            $this->crud->createAll($this->rolePermissionService, $rolePermissions);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentRole', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getDescription() {
        return $this->description;
    }

    function getPermissionlist() {
        return $this->permissionlist;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPermissionlist($permissionlist) {
        $this->permissionlist = $permissionlist;
    }

}
