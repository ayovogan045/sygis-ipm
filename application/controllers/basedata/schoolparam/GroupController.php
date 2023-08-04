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

use serviceImpl\GroupService,
    entities\Category;

require_once APPPATH . 'models/serviceImpl/GroupService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Group entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class GroupController extends BaseController {

    private $groupService;
    private $group_datalist;
    private $entity;
    private $wording;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("groupform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre d\'école');
        $this->layout->assignOne('subactivelink', 'Edition de Group');

        $this->groupService = new GroupService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function Group() {
        $this->layout->assignOne('datalist', $this->list_group());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('group_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/group/grouppage.tpl');
    }

    //Group
    //add a new Group to the database
    public function add_Group() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentgroup') > 0) {
            $this->doUpdate($this->session->userdata('currentgroup'));
            $this->session->set_userdata('currentgroup', 0);
        } else {
            //create an Group object
            $group = new Category($this->getWording(), $this->getNormalStatus());
            if ($this->groupService->getOneExist($group) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new Group to database
                $this->crud->create($this->groupService, $group);
                $this->layout->assignOne('success', "Enrégistrement du groupe " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('datalist', $this->list_group());
        // show the template
        $this->layout->view('content/basedata/schoolparam/group/grouppage.tpl');
    }

    //edit and update the status of the current Group data to the database
    public function edit_Group($group_id = 0) {
        $this->entity = $this->crud->findOne($this->groupService, $this->decryptionId($group_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('group_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/group'> abandonner</a> ");
            $this->group();
        }
    }

//update the status of the current Group data to the database
    public function delete_Group($group_id = 0) {
        $done = $this->crud->deleteOne($this->groupService, $this->decryptionId($group_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->group();
    }

//list the Group data from the database
    public function list_group() {
        $this->group_datalist = $this->crud->readSortAsc($this->groupService, 'wording');
        return $this->group_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['groupwording']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->groupService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentgroup', $this->entity->getId());
            $this->session->set_userdata('group_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('groupwordingvalue', $entity->getWording());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->groupService, $key);
        $this->entity->setWording($this->getWording());
        if ($this->groupService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans la base");
            $this->session->set_userdata('currentgroup', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->groupService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentgroup', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

}
