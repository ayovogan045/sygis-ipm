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

use serviceImpl\LessonUnitTypeService,
    entities\LessonUnitType;

require_once APPPATH . 'models/serviceImpl/LessonUnitTypeService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of LessonUnitType entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class LessonUnitTypeController extends BaseController {

    private $lessonunittypeService;
    private $lessonunittype_datalist;
    private $entity;
    private $wording;
    private $code;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("lessonunittypeform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètres');
        $this->layout->assignOne('subactivelink', 'Edition de catégorie UE');

        $this->lessonunittypeService = new LessonUnitTypeService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function lessonunittype() {
        $this->layout->assignOne('lessonunittype_datalist', $this->list_lessonunittype());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('lessonunittype_id'));
        // show the template
        $this->layout->view('content/teaching/lessonunittype/lessonunittypepage.tpl');
    }

    //LessonUnitType
    //add a new lessonunittype to the database
    public function add_lessonunittype() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentLessonUnitType') > 0) {
            $this->doUpdate($this->session->userdata('currentLessonUnitType'));
            $this->session->set_userdata('currentLessonUnitType', 0);
        } else {
            //create an lessonunittype object
            $lessonunittype = new LessonUnitType($this->getWording(), $this->getCode(), $this->getNormalStatus());
            if ($this->lessonunittypeService->getOneExist($lessonunittype) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new lessonunittype to database
                $this->crud->create($this->lessonunittypeService, $lessonunittype);
                $this->layout->assignOne('success', "Enrégistrement de catégorie UE " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('lessonunittype_datalist', $this->list_lessonunittype());
        // show the template
        $this->layout->view('content/teaching/lessonunittype/lessonunittypepage.tpl');
    }

    //edit and update the status of the current lessonunittype data to the database
    public function edit_lessonunittype($lessonunittype_id = 0) {
        $this->entity = $this->crud->findOne($this->lessonunittypeService, $this->decryptionId($lessonunittype_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('lessonunittype_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/lessonunittype'> abandonner</a> ");
            $this->lessonunittype();
        }
    }

//update the status of the current lessonunittype data to the database
    public function delete_lessonunittype($lessonunittype_id = 0) {
        $done = $this->crud->deleteOne($this->lessonunittypeService, $this->decryptionId($lessonunittype_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->lessonunittype();
    }

//list the lessonunittype data from the database
    public function list_lessonunittype() {
        $this->lessonunittype_datalist = $this->crud->readSortAsc($this->lessonunittypeService, 'wording');
        return $this->lessonunittype_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['lessonunittypewording']));
        $this->setCode(htmlspecialchars($_POST['lessonunittypecode']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->lessonunittypeService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentLessonUnitType', $this->entity->getId());
            $this->session->set_userdata('lessonunittype_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('lessonunittypewordingvalue', $entity->getWording());
            $this->layout->assignOne('lessonunittypecodevalue', $entity->getCode());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->lessonunittypeService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        if ($this->lessonunittypeService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentLessonUnitType', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->lessonunittypeService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentLessonUnitType', 0);
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
