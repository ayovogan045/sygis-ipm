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

use serviceImpl\SpecialityService,
    serviceImpl\MentionService,
    entities\Speciality;

require_once APPPATH . 'models/serviceImpl/SpecialityService.php';
require_once APPPATH . 'models/serviceImpl/MentionService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Speciality entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class SpecialityController extends BaseController {

    private $specialityService;
    private $mentionService;
    private $speciality_datalist;
    private $mention_datalist;
    private $entity;
    private $wording;
    private $code;
    private $mention;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("specialityform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre d\'école');
        $this->layout->assignOne('subactivelink', 'Edition de spécialité');

        $this->specialityService = new SpecialityService();
        $this->mentionService = new MentionService();
    }

    /**
     * Default function that will be executed unless another method specified
     * speciality
     */
    public function speciality() {
        $this->layout->assignOne('speciality_datalist', $this->list_speciality());
        $this->layout->assignOne('mention_datalist', $this->mentionChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('speciality_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/speciality/specialitypage.tpl');
    }

    //add a new speciality to the database
    public function add_speciality() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentSpeciality') > 0) {
            $this->doUpdate($this->session->userdata('currentSpeciality'));
            $this->session->set_userdata('currentSpeciality', 0);
        } else {
            //create an speciality object
            $speciality = new Speciality($this->getWording(), $this->getCode(), $this->getMention(), $this->getNormalStatus());
            if ($this->specialityService->getOneExist($speciality) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new speciality to database
                $this->crud->create($this->specialityService, $speciality);
                $this->layout->assignOne('success', "Enrégistrement de la ville " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('speciality_datalist', $this->list_speciality());
        $this->layout->assignOne('mention_datalist', $this->mentionChoiceListData());
        // show the template
        $this->layout->view('content/basedata/schoolparam/speciality/specialitypage.tpl');
    }

    //edit and update the status of the current speciality data to the database
    public function edit_speciality($speciality_id = 0) {
        $this->entity = $this->crud->findOne($this->specialityService, $this->decryptionId($speciality_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('speciality_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/speciality'> abandonner</a> ");
            $this->speciality();
        }
    }

    //update the status of the current speciality data to the database
    public function delete_speciality($speciality_id = 0) {
        $done = $this->crud->deleteOne($this->specialityService, $this->decryptionId($speciality_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->speciality();
    }

    //list the speciality data from the database
    public function list_speciality() {
        $this->speciality_datalist = $this->crud->readSortAsc($this->specialityService, 'wording');
        return $this->speciality_datalist;
    }

    //list of mention to populate Mention choicelist
    public function mentionChoiceListData() {
        $this->mention_datalist = $this->crud->readSortAsc($this->mentionService, 'wording');
        return $this->mention_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->specialityService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentSpeciality', $this->entity->getId());
            $this->session->set_userdata('speciality_id', 0);
        }
    }

    public function getPostData() {
        $this->setWording(htmlspecialchars($_POST['specialitywording']));
        $this->setCode(htmlspecialchars($_POST['specialitycode']));
        $this->setMention($this->crud->findOne($this->mentionService, htmlspecialchars($_POST['specialitymention'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('specialitywordingvalue', $entity->getWording());
            $this->layout->assignOne('specialitycodevalue', $entity->getCode());
            $this->layout->assignOne('mentionselected', $entity->getMention());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->specialityService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        $this->entity->setMention($this->getMention());
        if ($this->specialityService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentSpeciality', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->specialityService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentSpeciality', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    function getMention() {
        return $this->mention;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setMention($mention) {
        $this->mention = $mention;
    }

}
