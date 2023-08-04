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

use serviceImpl\LessonUnitMentionService,
    entities\LessonUnitMention;

require_once APPPATH . 'models/serviceImpl/LessonUnitMentionService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of LessonUnitMention entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class LessonUnitMentionController extends BaseController {

    private $lessonunitmentionService;
    private $lessonunitmention_datalist;
    private $entity;
    private $wording;
    private $code;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("lessonunitmentionform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètres');
        $this->layout->assignOne('subactivelink', 'Edition de catégorie UE');

        $this->lessonunitmentionService = new LessonUnitMentionService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function lessonunitmention() {
        $this->layout->assignOne('lessonunitmention_datalist', $this->list_lessonunitmention());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('lessonunitmention_id'));
        // show the template
        $this->layout->view('content/teaching/lessonunitmention/lessonunitmentionpage.tpl');
    }

    //LessonUnitMention
    //add a new lessonunitmention to the database
    public function add_lessonunitmention() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentlessonunitmention') > 0) {
            $this->doUpdate($this->session->userdata('currentlessonunitmention'));
            $this->session->set_userdata('currentlessonunitmention', 0);
        } else {
            //create an lessonunitmention object
            $lessonunitmention = new LessonUnitMention($this->getWording(), $this->getCode(), $this->getNormalStatus());
            if ($this->lessonunitmentionService->getOneExist($lessonunitmention) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new lessonunitmention to database
                $this->crud->create($this->lessonunitmentionService, $lessonunitmention);
                $this->layout->assignOne('success', "Enrégistrement de catégorie UE " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('lessonunitmention_datalist', $this->list_lessonunitmention());
        // show the template
        $this->layout->view('content/teaching/lessonunitmention/lessonunitmentionpage.tpl');
    }

    //edit and update the status of the current lessonunitmention data to the database
    public function edit_lessonunitmention($lessonunitmention_id = 0) {
        $this->entity = $this->crud->findOne($this->lessonunitmentionService, $this->decryptionId($lessonunitmention_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('lessonunitmention_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/lessonunitmention'> abandonner</a> ");
            $this->lessonunitmention();
        }
    }

//update the status of the current lessonunitmention data to the database
    public function delete_lessonunitmention($lessonunitmention_id = 0) {
        $done = $this->crud->deleteOne($this->lessonunitmentionService, $this->decryptionId($lessonunitmention_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->lessonunitmention();
    }

//list the lessonunitmention data from the database
    public function list_lessonunitmention() {
        $this->lessonunitmention_datalist = $this->crud->readSortAsc($this->lessonunitmentionService, 'wording');
        return $this->lessonunitmention_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['lessonunitmentionwording']));
        $this->setCode(htmlspecialchars($_POST['lessonunitmentioncode']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->lessonunitmentionService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentlessonunitmention', $this->entity->getId());
            $this->session->set_userdata('lessonunitmention_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('lessonunitmentionwordingvalue', $entity->getWording());
            $this->layout->assignOne('lessonunitmentioncodevalue', $entity->getCode());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->lessonunitmentionService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        if ($this->lessonunitmentionService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentlessonunitmention', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->lessonunitmentionService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentlessonunitmention', 0);
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
