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

use serviceImpl\ClassroomService,
    serviceImpl\ClassUnitService,
    serviceImpl\GroupService,
    entities\ClassRoom;

require_once APPPATH . 'models/serviceImpl/ClassroomService.php';
require_once APPPATH . 'models/serviceImpl/ClassUnitService.php';
require_once APPPATH . 'models/serviceImpl/GroupService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of ClassRoom entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class ClassRoomController extends BaseController {

    private $classroomService;
    private $classunitService;
    private $groupService;
    private $classroom_datalist;
    private $classunit_datalist;
    private $group_datalist;
    private $entity;
    private $classunit;
    private $group;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("classroomform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Schoolparam');
        $this->layout->assignOne('subactivelink', 'Edition de salle de cours');

        $this->classroomService = new ClassroomService();
        $this->classunitService = new ClassUnitService();
        $this->groupService = new GroupService();
    }

    /**
     * Default function that will be executed unless another method specified
     * classroom
     */
    public function classroom() {
        $this->layout->assignOne('classroom_datalist', $this->list_classroom());
        $this->layout->assignOne('group_datalist', $this->groupChoiceListData());
        $this->layout->assignOne('classunit_datalist', $this->classunitChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectuée avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('classroom_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/classroom/classroompage.tpl');
    }

    //add a new classroom to the database
    public function add_classroom() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentClassRoom') > 0) {
            $this->doUpdate($this->session->userdata('currentClassRoom'));
            $this->session->set_userdata('currentClassRoom', 0);
        } else {
            //create an classroom object
            $classroom = new ClassRoom($this->getClassunit(), $this->getGroup(), $this->getNormalStatus());
            if ($this->classroomService->getOneExist($classroom) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new classroom to database
                $this->crud->create($this->classroomService, $classroom);
                $this->layout->assignOne('success', "Enrégistrement de salle de cours " . $classroom->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('classroom_datalist', $this->list_classroom());
        $this->layout->assignOne('classunit_datalist', $this->classunitChoiceListData());
        $this->layout->assignOne('group_datalist', $this->groupChoiceListData());
        // show the template
        $this->layout->view('content/basedata/schoolparam/classroom/classroompage.tpl');
    }

    //edit and update the status of the current classroom data to the database
    public function edit_classroom($classroom_id = 0) {
        $this->entity = $this->crud->findOne($this->classroomService, $this->decryptionId($classroom_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('classroom_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/classroom'> abandonner</a> ");
            $this->classroom();
        }
    }

    //update the status of the current classroom data to the database
    public function delete_classroom($classroom_id = 0) {
        $done = $this->crud->deleteOne($this->classroomService, $this->decryptionId($classroom_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->classroom();
    }

    //list the classroom data from the database
    public function list_classroom() {
        $this->classroom_datalist = $this->crud->read($this->classroomService);
        return $this->classroom_datalist;
    }

    //list of group to populate Group choicelist
    public function groupChoiceListData() {
        $this->group_datalist = $this->crud->readSortAsc($this->groupService, 'wording');
        return $this->group_datalist;
    }

    //list of classunit to populate ClassUnit choicelist
    public function classunitChoiceListData() {
        $this->classunit_datalist = $this->crud->readSortAsc($this->classunitService, 'wording');
        return $this->classunit_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->classroomService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentClassRoom', $this->entity->getId());
            $this->session->set_userdata('classroom_id', 0);
        }
    }

    public function getPostData() {
        $this->setClassunit($this->crud->findOne($this->classunitService, htmlspecialchars($_POST['classroomclassunit'])));
        $this->setGroup($this->crud->findOne($this->groupService, htmlspecialchars($_POST['classroomgroup'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('classunitselected', $entity->getClassunit());
            $this->layout->assignOne('groupselected', $entity->getGroup());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->ClassroomService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setcode($this->getcode());
        $this->entity->setGroup($this->getGroup());
        if ($this->ClassroomService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentClassRoom', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->ClassroomService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentClassRoom', 0);
        }
    }

    function getClassunit() {
        return $this->classunit;
    }

    function getGroup() {
        return $this->group;
    }

    function setClassunit($classunit) {
        $this->classunit = $classunit;
    }

    function setGroup($group) {
        $this->group = $group;
    }

}
