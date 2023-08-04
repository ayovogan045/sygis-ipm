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

use serviceImpl\AcademicYearService,
    entities\AcademicYear;

require_once APPPATH . 'models/serviceImpl/AcademicYearService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of academicYear entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class AcademicYearController extends BaseController {

    private $academicyearService;
    private $academicyear_datalist;
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

        $this->layout->assignAll($this->config->item("academicyearform"));

        $this->layout->assignOne('openlink', 'Administration');
        $this->layout->assignOne('activelink', '');
        $this->layout->assignOne('subactivelink', 'Edition d\'année de academique');

        $this->academicyearService = new AcademicYearService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function academicyear() {
        $this->layout->assignOne('academicyeardatalist', $this->list_academicyear());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Désactivation éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Désactivation echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('academicyear_id'));
        // show the template
        $this->layout->view('content/administration/academicyear/academicyearpage.tpl');
    }

    //academicYear
    //add a new academicyear to the database
    public function add_academicyear() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentacademicYear') > 0) {
            $this->doUpdate($this->session->userdata('currentacademicYear'));
            $this->session->set_userdata('currentacademicYear', 0);
        } else {
            //create an academicyear object
            $academicyear = new AcademicYear($this->getWording(), $this->getCode(), null, $this->getActiveyear());
            if ($this->academicyearService->getOneExist($academicyear) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new academicyear to database
                $this->crud->create($this->academicyearService, $academicyear);
                $this->layout->assignOne('success', "Enrégistrement de l'année de academicyear " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('academicyeardatalist', $this->list_academicyear());
        // show the template
        $this->layout->view('content/administration/academicyear/academicyearpage.tpl');
    }

    //edit and update the status of the current academicyear data to the database
//    public function edit_academicyear($academicyear_id = 0) {
//        $this->entity = $this->crud->findOne($this->academicyearService, $this->decryptionId($academicyear_id));
//        if ($this->entity !== NULL) {
//            $this->session->set_userdata('academicyear_id', $this->entity->getId());
//            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
//                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/academicyear'> abandonner</a> ");
//            $this->academicyear();
//        }
//    }

    //update the status of the current academicyear data to the database
    public function activate_academicyear($academicyear_id = 0) {
        $this->entity = $this->crud->findOne($this->academicyearService, $this->decryptionId($academicyear_id));
        if ($this->entity !== NULL) {
            $this->entity->setState("Oui");
            $this->entity->setCurrent("1");
            $done = $this->crud->updateOne($this->academicyearService, $this->entity);
            $this->session->set_userdata('done', $done);
             $this->layout->assignOne('success', "Activation de l'année de academicyear " . $this->getWording() . ' éffectué avec succès ');
        }
        
        $this->layout->assignOne('academicyeardatalist', $this->list_academicyear());
        // show the template
        $this->layout->view('content/administration/academicyear/academicyearpage.tpl');
    }

    //update the status of the current academicyear data to the database
    public function desactivate_academicyear($academicyear_id = 0) {
        $this->entity = $this->crud->findOne($this->academicyearService, $this->decryptionId($academicyear_id));
        if ($this->entity !== NULL) {
            $this->entity->setState("Non");
            $this->entity->setCurrent("0");
            $done = $this->crud->updateOne($this->academicyearService, $this->entity);
            $this->session->set_userdata('done', $done);
            $this->layout->assignOne('success', "Désactivation de l'année de academicion " . $this->getWording() . ' éffectué avec succès ');
        }
        
        $this->layout->assignOne('academicyeardatalist', $this->list_academicyear());
        // show the template
        $this->layout->view('content/administration/academicyear/academicyearpage.tpl');
    }

//list the academicyear data from the database
    public function list_academicyear() {
        $this->academicyear_datalist = $this->crud->readSortAsc($this->academicyearService, 'wording');
        return $this->academicyear_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['academicyearwording']));
        $this->setCode(htmlspecialchars($_POST['academicyearcode']));
        $this->setActiveyear("Non");
        if (isset($_POST['academicyearactivated'])) {
            $this->setActiveyear("Oui");
        }
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->academicyearService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentacademicYear', $this->entity->getId());
            $this->session->set_userdata('academicyear_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('academicyearwordingvalue', $entity->getWording());
            $this->layout->assignOne('academicyearcodevalue', $entity->getCode());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->academicyearService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        if ($this->academicyearService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentacademicYear', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->academicyearService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentacademicYear', 0);
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
