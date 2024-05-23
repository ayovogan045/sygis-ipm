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

use serviceImpl\LessonUnitService,
    serviceImpl\LessonUnitTypeService,
    serviceImpl\SpecialityService,
    entities\LessonUnit;

require_once APPPATH . 'models/serviceImpl/LessonUnitService.php';
require_once APPPATH . 'models/serviceImpl/LessonUnitTypeService.php';
require_once APPPATH . 'models/serviceImpl/SpecialityService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of LessonUnit entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class LessonUnitController extends BaseController {

    private $lessonunitService;
    private $lessonunittypeService;
    private $specialityService;
    private $lessonunit_datalist;
    private $lessonunittype_datalist;
    private $lessonunitspeciality_datalist;
    private $entity;
    private $codeue;
    private $medium_wording;
    private $long_wording;
    private $lessonunittype;
    private $lessonunitspeciality;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("lessonunitform"));

        $this->layout->assignOne('openlink', 'Enseignement');
        $this->layout->assignOne('activelink', '');
        $this->layout->assignOne('subactivelink', 'Edition d\'Unité d\'enseignement');

        $this->lessonunitService = new LessonUnitService();
        $this->lessonunittypeService = new LessonUnitTypeService();
        $this->specialityService = new SpecialityService();
    }

    /**
     * Default function that will be executed unless another method specified
     * LessonUnit
     */
    public function lessonunit() {
        $this->layout->assignOne('lessonunit_datalist', $this->list_lessonunit());
        $this->layout->assignOne('lessonunittype_datalist', $this->lessonunittypeChoiceListData());
        $this->layout->assignOne('lessonunitspeciality_datalist', $this->lessonunitspecialityChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('lessonunit_id'));
        // show the template
        $this->layout->view('content/teaching/lessonunit/lessonunitpage.tpl');
    }

    //add a new LessonUnit to the database
    public function add_lessonunit() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentlessonunit') > 0) {
            $this->doUpdate($this->session->userdata('currentlessonunit'));
            $this->session->set_userdata('currentlessonunit', 0);
        } else {
            $lessonunit = new LessonUnit($this->getLong_wording(), $this->getMedium_wording(), $this->getCodeue(),
            $this->getLessonunittype(), $this->getLessonunitspeciality(),$this->getNormalStatus());
            if ($this->lessonunitService->getOneExist($lessonunit) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new LessonUnit to database
                $this->crud->create($this->lessonunitService, $lessonunit);
                $this->layout->assignOne('success', "Enrégistrement du semestre " . $this->getLong_wording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('lessonunit_datalist', $this->list_lessonunit());
        $this->layout->assignOne('lessonunittype_datalist', $this->lessonunittypeChoiceListData());
        $this->layout->assignOne('lessonunitspeciality_datalist', $this->lessonunitspecialityChoiceListData());
        // show the template
        $this->layout->view('content/teaching/lessonunit/lessonunitpage.tpl');
    }

    //edit and update the status of the current LessonUnit data to the database
    public function edit_lessonunit($lessonunit_id = 0) {
        $this->entity = $this->crud->findOne($this->lessonunitService, $this->decryptionId($lessonunit_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('lessonunit_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/lessonunit'> abandonner</a> ");
            $this->lessonunit();
        }
    }

    //update the status of the current LessonUnit data to the database
    public function delete_lessonunit($lessonunit_id = 0) {
        $done = $this->crud->deleteOne($this->lessonunitService, $this->decryptionId($lessonunit_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->lessonunit();
    }
    //list the LessonUnit data from the database
    public function list_lessonunit() {
        $this->lessonunit_datalist = $this->crud->readSortAsc($this->lessonunitService, 'long_wording');
        return $this->lessonunit_datalist;
    }

    //list of LessonUnitType to populate LessonUnitType choicelist
    public function lessonunittypeChoiceListData() {
        $this->lessonunittype_datalist = $this->crud->readSortAsc($this->lessonunittypeService, 'wording');
        return $this->lessonunittype_datalist;
    }

    //list of LessonUnitMention to populate LessonUnitMention choicelist
    public function lessonunitspecialityChoiceListData() {
        $this->lessonunitspeciality_datalist = $this->crud->readSortAsc($this->specialityService, 'wording');
        return $this->lessonunitspeciality_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->lessonunitService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentlessonunit', $this->entity->getId());
            $this->session->set_userdata('lessonunit_id', 0);
        }
    }

    public function getPostData() {
        $this->setCodeue(htmlspecialchars($_POST['codeue']));
        $this->setMedium_wording(htmlspecialchars($_POST['lessonunitmediumwording']));
        $this->setLong_wording(htmlspecialchars($_POST['lessonunitlongwording']));
        $this->setLessonunittype($this->crud->findOne($this->lessonunittypeService, htmlspecialchars($_POST['lessonunittype'])));
        $this->setLessonunitspeciality($this->crud->findOne($this->specialityService, htmlspecialchars($_POST['lessonunitspeciality'])));

    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('codeuevalue', $entity->getCodeue());
            $this->layout->assignOne('lessonunitlongwordingvalue', $entity->getLong_wording());
            $this->layout->assignOne('lessonunitmediumwordingvalue', $entity->getMedium_wording());
            $this->layout->assignOne('lessonunittypeselected', $entity->getLesson_unit_type());
            $this->layout->assignOne('lessonunitspecialityselected', $entity->getSpeciality());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->lessonunitService, $key);
        $this->entity->setCodeue($this->getCodeue());
        $this->entity->setMedium_wording($this->getMedium_wording());
        $this->entity->setLong_wording($this->getLong_wording());
        $this->entity->setLesson_unit_type($this->getLessonunittype());
        $this->entity->setSpeciality($this->getLessonunitspeciality());
        if ($this->lessonunitService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentlessonunit', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->lessonunitService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentlessonunit', 0);
        }
    }

    function getCodeue() {
        return $this->codeue;
    }

    function getMedium_wording() {
        return $this->medium_wording;
    }

    function getLong_wording() {
        return $this->long_wording;
    }

    function getLessonunittype() {
        return $this->lessonunittype;
    }

    public function getLessonunitspeciality() {
        return $this->lessonunitspeciality;
    }

    function setCodeue($codeue) {
        $this->codeue = $codeue;
    }

    function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    function setLessonunittype($lessonunittype) {
        $this->lessonunittype = $lessonunittype;
    }
    
    public function setLessonunitspeciality($lessonunitspeciality): void {
        $this->lessonunitspeciality = $lessonunitspeciality;
    }

}
