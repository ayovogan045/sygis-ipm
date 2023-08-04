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

use serviceImpl\ClassUnitService,
    serviceImpl\LevelService,
    entities\ClassUnit;

require_once APPPATH . 'models/serviceImpl/ClassUnitService.php';
require_once APPPATH . 'models/serviceImpl/LevelService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of ClassUnit entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class ClassUnitController extends BaseController {

    private $classunitService;
    private $levelService;
    private $classunit_datalist;
    private $level_datalist;
    private $entity;
    private $wording;
    private $code;
    private $level;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("classunitform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Schoolparam');
        $this->layout->assignOne('subactivelink', 'Edition de classe');

        $this->classunitService = new ClassUnitService();
        $this->levelService = new LevelService();
    }

    /**
     * Default function that will be executed unless another method specified
     * classunit
     */
    public function classunit() {
        $this->layout->assignOne('classunit_datalist', $this->list_classunit());
        $this->layout->assignOne('level_datalist', $this->levelChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectuée avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('classunit_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/classunit/classunitpage.tpl');
    }

    //add a new classunit to the database
    public function add_classunit() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentClassUnit') > 0) {
            $this->doUpdate($this->session->userdata('currentClassUnit'));
            $this->session->set_userdata('currentClassUnit', 0);
        } else {
            //create an classunit object
            $classunit = new ClassUnit($this->getWording(), $this->getcode(), $this->getLevel(), $this->getNormalStatus());
            if ($this->classunitService->getOneExist($classunit) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new classunit to database
                $this->crud->create($this->classunitService, $classunit);
                $this->layout->assignOne('success', "Enrégistrement du classunit " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('classunit_datalist', $this->list_classunit());
        $this->layout->assignOne('level_datalist', $this->levelChoiceListData());
        // show the template
        $this->layout->view('content/basedata/schoolparam/classunit/classunitpage.tpl');
    }

    //edit and update the status of the current classunit data to the database
    public function edit_classunit($classunit_id = 0) {
        $this->entity = $this->crud->findOne($this->classunitService, $this->decryptionId($classunit_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('classunit_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/classunit'> abandonner</a> ");
            $this->classunit();
        }
    }

    //update the status of the current classunit data to the database
    public function delete_classunit($classunit_id = 0) {
        $done = $this->crud->deleteOne($this->classunitService, $this->decryptionId($classunit_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->classunit();
    }

    //list the classunit data from the database
    public function list_classunit() {
        $this->classunit_datalist = $this->crud->readSortAsc($this->classunitService, 'wording');
        return $this->classunit_datalist;
    }

    //list of level to populate Level choicelist
    public function levelChoiceListData() {
        $this->level_datalist = $this->crud->readSortAsc($this->levelService, 'wording');
        return $this->level_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->classunitService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentClassUnit', $this->entity->getId());
            $this->session->set_userdata('classunit_id', 0);
        }
    }

    public function getPostData() {
        $this->setWording(htmlspecialchars($_POST['classunitwording']));
        $this->setcode(htmlspecialchars($_POST['classunitcode']));
        $this->setLevel($this->crud->findOne($this->levelService, htmlspecialchars($_POST['classunitlevel'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('classunitwordingvalue', $entity->getWording());
            $this->layout->assignOne('classunitcodevalue', $entity->getcode());
            $this->layout->assignOne('levelselected', $entity->getLevel());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->classunitService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setcode($this->getcode());
        $this->entity->setLevel($this->getLevel());
        if ($this->classunitService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentClassUnit', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->classunitService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentClassUnit', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getcode() {
        return $this->code;
    }

    function getLevel() {
        return $this->level;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setcode($code) {
        $this->code = $code;
    }

    function setLevel($level) {
        $this->level = $level;
    }

}
