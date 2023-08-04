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

use serviceImpl\FeeTypeService,
    entities\FeeType;

require_once APPPATH . 'models/serviceImpl/FeeTypeService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of FeeType entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class FeeTypeController extends BaseController {

    private $feetypeService;
    private $feetype_datalist;
    private $entity;
    private $wording;
    private $description;
    private $code;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("feetypeform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètres');
        $this->layout->assignOne('subactivelink', 'Edition de type de frais');

        $this->feetypeService = new FeeTypeService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function feetype() {
        $this->layout->assignOne('feetype_datalist', $this->list_feetype());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('feetype_id'));
        // show the template
        $this->layout->view('content/basedata/parameter/feetype/feetypepage.tpl');
    }

    //FeeType
    //add a new feetype to the database
    public function add_feetype() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentFeeType') > 0) {
            $this->doUpdate($this->session->userdata('currentFeeType'));
            $this->session->set_userdata('currentFeeType', 0);
        } else {
            //create an feetype object
            $feetype = new FeeType($this->getWording(), $this->getCode(), $this->getDescription(), $this->getNormalStatus());
            if ($this->feetypeService->getOneExist($feetype) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new feetype to database
                $this->crud->create($this->feetypeService, $feetype);
                $this->layout->assignOne('success', "Enrégistrement de type de frais " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('feetype_datalist', $this->list_feetype());
        // show the template
        $this->layout->view('content/basedata/parameter/feetype/feetypepage.tpl');
    }

    //edit and update the status of the current feetype data to the database
    public function edit_feetype($feetype_id = 0) {
        $this->entity = $this->crud->findOne($this->feetypeService, $this->decryptionId($feetype_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('feetype_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/feetype'> abandonner</a> ");
            $this->feetype();
        }
    }

//update the status of the current feetype data to the database
    public function delete_feetype($feetype_id = 0) {
        $done = $this->crud->deleteOne($this->feetypeService, $this->decryptionId($feetype_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->feetype();
    }

//list the feetype data from the database
    public function list_feetype() {
        $this->feetype_datalist = $this->crud->readSortAsc($this->feetypeService, 'wording');
        return $this->feetype_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['feetypewording']));
        $this->setCode(htmlspecialchars($_POST['feetypecode']));
        $this->setDescription(htmlspecialchars($_POST['feetypedescription']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->feetypeService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentFeeType', $this->entity->getId());
            $this->session->set_userdata('feetype_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('feetypewordingvalue', $entity->getWording());
            $this->layout->assignOne('feetypecodevalue', $entity->getCode());
            $this->layout->assignOne('feetypedescriptionvalue', $entity->getDescription());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->feetypeService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        $this->entity->setDescription($this->getDescription());
        if ($this->feetypeService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentFeeType', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->feetypeService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentFeeType', 0);
        }
    }

    public function getWording() {
        return $this->wording;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getCode() {
        return $this->code;
    }

    public function setWording($wording): void {
        $this->wording = $wording;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setCode($code): void {
        $this->code = $code;
    }


}
