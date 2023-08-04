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

use serviceImpl\FeeService,
    serviceImpl\FeeTypeService,
    entities\Fee;

require_once APPPATH . 'models/serviceImpl/FeeService.php';
require_once APPPATH . 'models/serviceImpl/FeeTypeService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Fee entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class FeeController extends BaseController {

    private $feeService;
    private $feetypeService;
    private $fee_datalist;
    private $feetype_datalist;
    private $entity;
    private $wording;
    private $amount;
    private $feetype;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("feeform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre');
        $this->layout->assignOne('subactivelink', 'Edition des frais');

        $this->feeService = new FeeService();
        $this->feetypeService = new FeeTypeService();
    }

    /**
     * Default function that will be executed unless another method specified
     * fee
     */
    public function fee() {
        $this->layout->assignOne('fee_datalist', $this->list_fee());
        $this->layout->assignOne('feetype_datalist', $this->feetypeChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('fee_id'));
        // show the template
        $this->layout->view('content/basedata/parameter/fee/feepage.tpl');
    }

    //add a new fee to the database
    public function add_fee() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentFee') > 0) {
            $this->doUpdate($this->session->userdata('currentFee'));
            $this->session->set_userdata('currentFee', 0);
        } else {
            //create an fee object
            $fee = new Fee($this->getWording(), $this->getAmount(), $this->getNormalStatus(), $this->getFeeType());
            if ($this->feeService->getOneExist($fee) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new fee to database
                $this->crud->create($this->feeService, $fee);
                $this->layout->assignOne('success', "Enrégistrement de " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('fee_datalist', $this->list_fee());
        $this->layout->assignOne('feetype_datalist', $this->feetypeChoiceListData());
        // show the template
        $this->layout->view('content/basedata/parameter/fee/feepage.tpl');
    }

    //edit and update the status of the current fee data to the database
    public function edit_fee($fee_id = 0) {
        $this->entity = $this->crud->findOne($this->feeService, $this->decryptionId($fee_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('fee_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/fee'> abandonner</a> ");
            $this->fee();
        }
    }

    //update the status of the current fee data to the database
    public function delete_fee($fee_id = 0) {
        $done = $this->crud->deleteOne($this->feeService, $this->decryptionId($fee_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->fee();
    }

    //list the fee data from the database
    public function list_fee() {
        $this->fee_datalist = $this->crud->readSortAsc($this->feeService, 'wording');
        return $this->fee_datalist;
    }

    //list of feetype to populate FeeType choicelist
    public function feetypeChoiceListData() {
        $this->feetype_datalist = $this->crud->readSortAsc($this->feetypeService, 'wording');
        return $this->feetype_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->feeService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentFee', $this->entity->getId());
            $this->session->set_userdata('fee_id', 0);
        }
    }

    public function getPostData() {
        $this->setWording(htmlspecialchars($_POST['feewording']));
        $this->setAmount(htmlspecialchars($_POST['feeamount']));
        $this->setFeeType($this->crud->findOne($this->feetypeService, htmlspecialchars($_POST['feetype'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('feewordingvalue', $entity->getWording());
            $this->layout->assignOne('feeamountvalue', $entity->getAmount());
            $this->layout->assignOne('feetypeselected', $entity->getFee_type());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->feeService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setAmount($this->getAmount());
        $this->entity->setFee_type($this->getFeeType());
        if ($this->feeService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentFee', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->feeService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentFee', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getAmount() {
        return $this->amount;
    }

    function getFeeType() {
        return $this->feetype;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setFeeType($feetype) {
        $this->feetype = $feetype;
    }

}
