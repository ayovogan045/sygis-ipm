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

use serviceImpl\LevelService,
    entities\Level;

require_once APPPATH . 'models/serviceImpl/LevelService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Level entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class LevelController extends BaseController {

    private $levelService;
    private $level_datalist;
    private $entity;
    private $wording;
    private $code;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("levelform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre d\'école');
        $this->layout->assignOne('subactivelink', 'Edition de Niveau Scolaire');

        $this->levelService = new LevelService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function level() {
        $this->layout->assignOne('datalist', $this->list_level());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('level_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/level/levelpage.tpl');
    }

    //Level
    //add a new level to the database
    public function add_level() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentLevel') > 0) {
            $this->doUpdate($this->session->userdata('currentLevel'));
            $this->session->set_userdata('currentLevel', 0);
        } else {
            //create an level object
            $level = new Level($this->getWording(), $this->getCode(), $this->getNormalStatus());
            if ($this->levelService->getOneExist($level) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new level to database
                $this->crud->create($this->levelService, $level);
                $this->layout->assignOne('success', "Enrégistrement du niveau scolaire " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('datalist', $this->list_level());
        // show the template
        $this->layout->view('content/basedata/schoolparam/level/levelpage.tpl');
    }

    //edit and update the status of the current level data to the database
    public function edit_level($level_id = 0) {
        $this->entity = $this->crud->findOne($this->levelService, $this->decryptionId($level_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('level_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/level'> abandonner</a> ");
            $this->level();
        }
    }

//update the status of the current level data to the database
    public function delete_level($level_id = 0) {
        $done = $this->crud->deleteOne($this->levelService, $this->decryptionId($level_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->level();
    }

//list the level data from the database
    public function list_level() {
        $this->level_datalist = $this->crud->readSortAsc($this->levelService, 'wording');
        return $this->level_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['levelwording']));
        $this->setCode(htmlspecialchars($_POST['levelcode']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->levelService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentLevel', $this->entity->getId());
            $this->session->set_userdata('level_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('levelwordingvalue', $entity->getWording());
            $this->layout->assignOne('levelcodevalue', $entity->getCode());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->levelService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        if ($this->levelService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentLevel', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->levelService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentLevel', 0);
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
