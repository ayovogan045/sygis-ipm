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
    serviceImpl\InscriptionService,
    serviceImpl\CandidatService,
    entities\Fee,
    entities\Inscription;

require_once APPPATH . 'models/serviceImpl/FeeService.php';
require_once APPPATH . 'models/serviceImpl/InscriptionService.php';
require_once APPPATH . 'models/serviceImpl/CandidatService.php';

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
class StudyFeesController extends BaseController {

    private $feeService;
    private $inscriptionService;
    private $candidatService;
    private $fee_datalist;
    private $inscription_datalist;
    private $candidat_datalist;
    private $entity;
    private $candidat;
    private $fee;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("studyfeesform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre');
        $this->layout->assignOne('subactivelink', 'Paiement de frais de dossier');

        $this->feeService = new FeeService();
        $this->inscriptionService = new InscriptionService();
        $this->candidatService = new CandidatService();
    }

    /**
     * Default function that will be executed unless another method specified
     * fee
     */
    public function studyfees() {
        $this->layout->assignOne('studyfees_datalist', $this->list_studyfees());
        $this->layout->assignOne('candidat_datalist', $this->candidatChoiceListData());
        $this->layout->assignOne('fee_datalist', $this->feeChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('fee_id'));
        // show the template
        $this->layout->view('content/recovery/studyfees/studyfeespage.tpl');
    }

    //add a new fee to the database
    public function add_studyfees() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentStudyFees') > 0) {
            $this->doUpdate($this->session->userdata('currentStudyFees'));
            $this->session->set_userdata('currentStudyFees', 0);
        } else {
            //create an fee object
            $inscription = new Inscription($this->getFee()->getAmount(), 0, date("F j, Y, g:i a"),
                    $this->getNormalStatus(), $this->getCandidat(), $this->getFee());
            if ($this->inscriptionService->getOneExist($inscription) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new fee to database
                $this->crud->create($this->inscriptionService, $inscription);
                $this->layout->assignOne('success', "paiement de de frais de dossier éffectué avec succès ");
            }
        }
        $this->layout->assignOne('studyfees_datalist', $this->list_studyfees());
        $this->layout->assignOne('candidat_datalist', $this->candidatChoiceListData());
        $this->layout->assignOne('fee_datalist', $this->feeChoiceListData());
        // show the template
        $this->layout->view('content/basedata/parameter/fee/feepage.tpl');
    }

    //edit and update the status of the current fee data to the database
    public function edit_studyfees($fee_id = 0) {
        $this->entity = $this->crud->findOne($this->feeService, $this->decryptionId($fee_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('fee_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/fee'> abandonner</a> ");
            $this->fee();
        }
    }

    //update the status of the current fee data to the database
    public function delete_studyfees($fee_id = 0) {
        $done = $this->crud->deleteOne($this->feeService, $this->decryptionId($fee_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->fee();
    }

    //list the fee data from the database
    public function list_studyfees() {
        $this->fee_datalist = $this->crud->readSortAsc($this->feeService, 'wording');
        return $this->fee_datalist;
    }

    //list of inscription to populate Inscription choicelist
    public function candidatChoiceListData() {
        $this->candidat_datalist = $this->candidatService->getAllWithSortAndOrder("last_name", "ASC");
        return $this->candidat_datalist;
    }

    //list of inscription to populate Inscription choicelist
    public function feeChoiceListData() {
        $this->fee_datalist = $this->crud->readSortAsc($this->feeService, 'wording');
        return $this->fee_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->feeService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentStudyFees', $this->entity->getId());
            $this->session->set_userdata('fee_id', 0);
        }
    }

    public function getPostData() {
        $this->setFee($this->crud->findOne($this->feeService, htmlspecialchars($_POST['fee'])));
        $this->setCandidat($this->crud->findOne($this->candidatService, htmlspecialchars($_POST['candidat'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('feevalue', $entity->getFee());
            $this->layout->assignOne('candidatvalue', $entity->getCandidat());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->feeService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setAmount($this->getAmount());
        $this->entity->setFee_type($this->getInscription());
        if ($this->feeService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentStudyFees', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->feeService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentStudyFees', 0);
        }
    }

    public function getCandidat() {
        return $this->candidat;
    }

    public function getFee() {
        return $this->fee;
    }

    public function setCandidat($candidat): void {
        $this->candidat = $candidat;
    }

    public function setFee($fee): void {
        $this->fee = $fee;
    }

}
