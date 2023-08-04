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

use serviceImpl\MentionService,
    serviceImpl\gradeService,
    entities\Mention;

require_once APPPATH . 'models/serviceImpl/MentionService.php';
require_once APPPATH . 'models/serviceImpl/GradeService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Mention entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class MentionController extends BaseController {

    private $mentionService;
    private $gradeService;
    private $mention_datalist;
    private $grade_datalist;
    private $entity;
    private $wording;
    private $code;
    private $grade;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("mentionform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Paramètre d\'école');
        $this->layout->assignOne('subactivelink', 'Edition de mention');

        $this->mentionService = new MentionService();
        $this->gradeService = new gradeService();
    }

    /**
     * Default function that will be executed unless another method specified
     * mention
     */
    public function mention() {
        $this->layout->assignOne('mention_datalist', $this->list_mention());
        $this->layout->assignOne('grade_datalist', $this->gradeChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('mention_id'));
        // show the template
        $this->layout->view('content/basedata/schoolparam/mention/mentionpage.tpl');
    }

    //add a new mention to the database
    public function add_mention() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentMention') > 0) {
            $this->doUpdate($this->session->userdata('currentMention'));
            $this->session->set_userdata('currentMention', 0);
        } else {
            //create an mention object
            $mention = new Mention($this->getWording(), $this->getCode(), $this->getGrade(), $this->getNormalStatus());
            if ($this->mentionService->getOneExist($mention) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new mention to database
                $this->crud->create($this->mentionService, $mention);
                $this->layout->assignOne('success', "Enrégistrement de la mention " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('mention_datalist', $this->list_mention());
        $this->layout->assignOne('grade_datalist', $this->gradeChoiceListData());
        // show the template
        $this->layout->view('content/basedata/schoolparam/mention/mentionpage.tpl');
    }

    //edit and update the status of the current mention data to the database
    public function edit_mention($mention_id = 0) {
        $this->entity = $this->crud->findOne($this->mentionService, $this->decryptionId($mention_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('mention_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/mention'> abandonner</a> ");
            $this->mention();
        }
    }

    //update the status of the current mention data to the database
    public function delete_mention($mention_id = 0) {
        $done = $this->crud->deleteOne($this->mentionService, $this->decryptionId($mention_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->mention();
    }

    //list the mention data from the database
    public function list_mention() {
        $this->mention_datalist = $this->crud->readSortAsc($this->mentionService, 'wording');
        return $this->mention_datalist;
    }

    //list of Grade to populate Grade choicelist
    public function gradeChoiceListData() {
        $this->grade_datalist = $this->crud->readSortAsc($this->gradeService, 'wording');
        return $this->grade_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->mentionService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentMention', $this->entity->getId());
            $this->session->set_userdata('mention_id', 0);
        }
    }

    public function getPostData() {
        $this->setWording(htmlspecialchars($_POST['mentionwording']));
        $this->setCode(htmlspecialchars($_POST['mentioncode']));
        $this->setGrade($this->crud->findOne($this->gradeService, htmlspecialchars($_POST['mentiongrade'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('mentionwordingvalue', $entity->getWording());
            $this->layout->assignOne('mentioncodevalue', $entity->getCode());
            $this->layout->assignOne('gradeselected', $entity->getGrade());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->mentionService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setCode($this->getCode());
        $this->entity->setGrade($this->getGrade());
        if ($this->mentionService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentMention', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->mentionService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentMention', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    function getGrade() {
        return $this->grade;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setGrade($grade) {
        $this->grade = $grade;
    }

}
