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

use serviceImpl\SchoolService,
    entities\School;

require_once APPPATH . 'models/serviceImpl/SchoolService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of School entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class SchoolController extends BaseController {

    private $schoolService;
    private $school_datalist;
    private $entity;
    private $wording;
    private $code;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("schoolform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre d\'école');
        $this->layout->assignOne('subactivelink', 'Edition d\'école de provenance');

        $this->schoolService = new SchoolService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function school() {
        $this->layout->assignOne('datalist', $this->list_school());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('school_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/school/schoolpage.tpl');
    }

    //School
    //add a new school to the database
    public function add_school() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentSchool') > 0) {
            $this->doUpdate($this->session->userdata('currentSchool'));
            $this->session->set_userdata('currentSchool', 0);
        } else {
            //create an school object
            $school = new School($this->getWording(), $this->getCode(), $this->getNormalStatus());
            if ($this->schoolService->getOneExist($school) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new school to database
                $this->crud->create($this->schoolService, $school);
                $this->layout->assignOne('success', "Enrégistrement du niveau scolaire " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('datalist', $this->list_school());
        // show the template
        $this->layout->view('content/basedata/schoolparam/school/schoolpage.tpl');
    }

    //edit and update the status of the current school data to the database
    public function edit_school($school_id = 0) {
        $this->entity = $this->crud->findOne($this->schoolService, $this->decryptionId($school_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('school_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/school'> abandonner</a> ");
            $this->school();
        }
    }

//update the status of the current school data to the database
    public function delete_school($school_id = 0) {
        $done = $this->crud->deleteOne($this->schoolService, $this->decryptionId($school_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->school();
    }

//list the school data from the database
    public function list_school() {
        $this->school_datalist = $this->crud->readSortAsc($this->schoolService, 'wording');
        return $this->school_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['schoolwording']));
        $this->setCode(htmlspecialchars($_POST['schoolcode']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->schoolService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentSchool', $this->entity->getId());
            $this->session->set_userdata('school_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('schoolwordingvalue', $entity->getWording());
            $this->layout->assignOne('schoolcodevalue', $entity->getCode());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->schoolService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        if ($this->schoolService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentSchool', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->schoolService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentSchool', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

}
