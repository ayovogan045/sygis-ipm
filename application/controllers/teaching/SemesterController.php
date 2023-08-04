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

use serviceImpl\SemesterService,
    serviceImpl\AcademicYearService,
    entities\Semester;

require_once APPPATH . 'models/serviceImpl/SemesterService.php';
require_once APPPATH . 'models/serviceImpl/AcademicYearService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Semester entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class SemesterController extends BaseController {

    private $semesterService;
    private $academicyearService;
    private $semester_datalist;
    private $academicyear_datalist;
    private $entity;
    private $short_wording;
    private $medium_wording;
    private $long_wording;
    private $academicyear;
    private $active_semester;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("semesterform"));

        $this->layout->assignOne('openlink', 'Enseignement');
        $this->layout->assignOne('activelink', '');
        $this->layout->assignOne('subactivelink', 'Edition du semestre');

        $this->semesterService = new SemesterService();
        $this->academicyearService = new AcademicYearService();
    }

    /**
     * Default function that will be executed unless another method specified
     * Semester
     */
    public function semester() {
        $this->layout->assignOne('semester_datalist', $this->list_semester());
        $this->layout->assignOne('academicyear_datalist', $this->academicyearChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('semester_id'));
        // show the template
        $this->layout->view('content/teaching/semester/semesterpage.tpl');
    }

    //add a new Semester to the database
    public function add_semester() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentsemester') > 0) {
            $this->doUpdate($this->session->userdata('currentsemester'));
            $this->session->set_userdata('currentsemester', 0);
        } else {
            //create an Semester object
            $semester = new Semester($this->getShort_wording(), $this->getMedium_wording(),
                    $this->getlong_wording(), $this->getNormalStatus(), $this->getActive_semester(), $this->getAcademicyear());
            if ($this->semesterService->getOneExist($semester) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new Semester to database
                $this->crud->create($this->semesterService, $semester);
                $this->layout->assignOne('success', "Enrégistrement du semestre " . $this->getLong_wording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('semester_datalist', $this->list_semester());
        $this->layout->assignOne('academicyear_datalist', $this->academicyearChoiceListData());
        // show the template
        $this->layout->view('content/teaching/semester/semesterpage.tpl');
    }

    //update the status of the current academicyear data to the database
    public function activate_semester($semester_id = 0) {
        $this->entity = $this->crud->findOne($this->semesterService, $this->decryptionId($semester_id));
        if ($this->entity !== NULL) {
            $this->entity->setState("Oui");
            $done = $this->crud->updateOne($this->semesterService, $this->entity);
            $this->session->set_userdata('done', $done);
            $this->layout->assignOne('success', "Activation du semestre " . $this->getLong_wording() . ' éffectué avec succès ');
        }

        $this->layout->assignOne('semester_datalist', $this->list_semester());
        // show the template
        $this->layout->view('content/teaching/semester/semesterpage.tpl');
    }

    //update the status of the current academicyear data to the database
    public function desactivate_semester($semester_id = 0) {
        $this->entity = $this->crud->findOne($this->semesterService, $this->decryptionId($semester_id));
        if ($this->entity !== NULL) {
            $this->entity->setState("Non");
            $done = $this->crud->updateOne($this->semesterService, $this->entity);
            $this->session->set_userdata('done', $done);
            $this->layout->assignOne('success', "Désactivation du semestre " . $this->getLong_wording() . ' éffectué avec succès ');
        }

        $this->layout->assignOne('semester_datalist', $this->list_semester());
        // show the template
        $this->layout->view('content/teaching/semester/semesterpage.tpl');
    }
    
    //list the Semester data from the database
    public function list_semester() {
        $this->semester_datalist = $this->crud->readSortAsc($this->semesterService, 'long_wording');
        return $this->semester_datalist;
    }

    //list of AcademicYear to populate AcademicYear choicelist
    public function academicyearChoiceListData() {
        $this->academicyear_datalist = $this->crud->readSortAsc($this->academicyearService, 'code');
        return $this->academicyear_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->SemesterService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentSemester', $this->entity->getId());
            $this->session->set_userdata('Semester_id', 0);
        }
    }

    public function getPostData() {
        $this->setShort_wording(htmlspecialchars($_POST['semestershortwording']));
        $this->setMedium_wording(htmlspecialchars($_POST['semestermediumwording']));
        $this->setLong_wording(htmlspecialchars($_POST['semesterlongwording']));
        $this->setAcademicyear($this->crud->findOne($this->academicyearService, htmlspecialchars($_POST['semesteracademicyear'])));
        $this->setActive_semester("Non");
        if (isset($_POST['semesteractivated'])) {
            $this->setActive_semester("Oui");
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->SemesterService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setlong_wording($this->getlong_wording());
        $this->entity->setAcademicYear($this->getAcademicYear());
        if ($this->SemesterService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentSemester', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->SemesterService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentSemester', 0);
        }
    }

    function getShort_wording() {
        return $this->short_wording;
    }

    function getMedium_wording() {
        return $this->medium_wording;
    }

    function getLong_wording() {
        return $this->long_wording;
    }

    function getAcademicyear() {
        return $this->academicyear;
    }

    function getActive_semester() {
        return $this->active_semester;
    }

    function setShort_wording($short_wording) {
        $this->short_wording = $short_wording;
    }

    function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    function setAcademicyear($academicyear) {
        $this->academicyear = $academicyear;
    }

    function setActive_semester($active_semester) {
        $this->active_semester = $active_semester;
    }

}
