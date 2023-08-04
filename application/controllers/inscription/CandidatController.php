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

use entities\Candidat,
    entities\PersonInfo;
use serviceImpl\CandidatService,
    serviceImpl\GenderService,
    serviceImpl\CityService,
    serviceImpl\CountryService,
    serviceImpl\SchoolService;

use Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/serviceImpl/CandidatService.php';
require_once APPPATH . 'models/serviceImpl/CityService.php';
require_once APPPATH . 'models/serviceImpl/CountryService.php';
require_once APPPATH . 'models/serviceImpl/GenderService.php';
require_once APPPATH . 'models/serviceImpl/SchoolService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Candidat entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class CandidatController extends BaseController {

    private $candidatService;
    private $cityService;
    private $countryService;
    private $genderService;
    private $schoolService;
    private $personInfoService;
    private $candidat_datalist;
    private $birthcity_datalist;
    private $nationality_datalist;
    private $gender_datalist;
    private $school_datalist;
    private $bloodgroup_datalist;
    private $personinfo_datalist;
    private $personinfo;
    private $entity;
    private $last_name;
    private $first_name;
    private $phone;
    private $mail;
    private $guardian_name;
    private $guardian_mail;
    private $guardian_phone;
    private $adress;
    private $birth_date;
    private $matricule;
    private $blood_group;
    private $picture;
    private $create_date;
    private $gender;
    private $birth_city;
    private $nationality;
    private $old_school;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignOne('addnewlink', 'inscription/CandidatController/newcandidat');
        $this->layout->assignOne('listlink', 'inscription/CandidatController/candidatlist');
        $this->layout->assignAll($this->config->item("candidatform"));

        $this->layout->assignOne('openlink', 'Inscription');
        $this->layout->assignOne('activelink', '');
        $this->layout->assignOne('subactivelink', 'Edition des candidats');

        $this->candidatService = new CandidatService();
        $this->cityService = new CityService();
        $this->countryService = new CountryService();
        $this->genderService = new GenderService();
        $this->schoolService = new SchoolService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function candidat() {
        $this->layout->assignOne('candidatdatalist', $this->list_candidat());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Désactivation éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Désactivation echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('candidat_id'));
        // show the template
        $this->layout->view('content/inscription/candidat/candidatlistpage.tpl');
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function newcandidat() {
        if ($this->session->userdata('candidat_id') != 0) {
            $this->editFields($this->session->userdata('candidat_id'));

            $this->layout->assignOne('addnewlink', '../../../inscription/CandidatController/newcandidat');
            $this->layout->assignOne('listlink', '../../../inscription/CandidatController/candidatlist');
        } else {
            $this->layout->assignOne('nationality_datalist', $this->countryChoiceListData());
            $this->layout->assignOne('gender_datalist', $this->genderChoiceListData());
            $this->layout->assignOne('birthcity_datalist', $this->cityChoiceListData());
            $this->layout->assignOne('school_datalist', $this->schoolChoiceListData());
            $this->layout->assignOne('bloodgroup_datalist', $this->bloodgroupChoiceListData());

            $this->layout->assignOne('addnewlink', '../../../index.php/inscription/CandidatController/newcandidat');
            $this->layout->assignOne('listlink', '../../../index.php/inscription/CandidatController/candidatlist');
        }
        // show the template
        $this->layout->view('content/inscription/candidat/candidatformpage.tpl');
    }
//
//    //Candidat
//    //add a new candidat to the database
    public function add_candidat() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentCandidat') > 0) {
            $this->doUpdate($this->session->userdata('currentCandidat'));
            $this->session->set_userdata('currentCandidat', 0);
        } else {
            //create an candidat object
//            $this->per
            $candidat = new Candidat( $this->getNormalStatus(), 0 , $this->getPersoninfo());
            if ($this->candidatService->getOneExist($candidat) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new candidat to database
                $this->crud->create($this->candidatService, $candidat);
                $currentCandidat = $this->crud->findLast($this->candidatService);
                $this->layout->assignOne('success', "Enrégistrement du candidat " . $this->getPersoninfo()->__toString() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('candidatdatalist', $this->list_candidat());

        $this->layout->assignOne('addnewlink', '../index.php/inscription/CandidatController/newcandidat');
        $this->layout->assignOne('listlink', '../index.php/inscription/CandidatController/candidatlist');
        $this->layout->assignOne('subactivelink', 'Liste des candidats');
        // show the template
        $this->layout->view('content/inscription/candidat/candidatlistpage.tpl');
    }
//
    //list of candidat
    public function candidatlist() {
        $this->layout->assignOne('candidatdatalist', $this->list_candidat());

        $this->layout->assignOne('addnewlink', '../../../index.php/inscription/CandidatController/newcandidat');
        $this->layout->assignOne('listlink', '../../../index.php/inscription/CandidatController/candidatlist');
        $this->layout->assignOne('subactivelink', 'Liste des candidats');
       
        // show the template
        $this->layout->view('content/inscription/candidat/candidatlistpage.tpl');
    }
//
//    //edit and update the status of the current candidat data to the database
    public function edit_candidat($candidat_id = 0) {
        $this->entity = $this->crud->findOne($this->candidatService, $this->decryptionId($candidat_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('candidat_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/candidat'> abandonner</a> ");
            $this->newcandidat();
        }
    }
//
//list the candidat data from the database
    public function list_candidat() {
        $this->candidat_datalist = $this->crud->read($this->candidatService);
//                $this->candidatService->getAll();
        return $this->candidat_datalist;
    }
//
//    //list of country to populate Country choicelist
    public function countryChoiceListData() {
        $this->nationality_datalist = $this->crud->readSortAsc($this->countryService, 'wording');
        return $this->nationality_datalist;
    }
//
//    //list of gender to populate Gender choicelist
    public function genderChoiceListData() {
        $this->gender_datalist = $this->crud->readSortAsc($this->genderService, 'long_wording');
        return $this->gender_datalist;
    }
//
//    //list of cityto populate City choicelist
    public function cityChoiceListData() {
        $this->birthcity_datalist = $this->crud->readSortAsc($this->cityService, 'wording');
        return $this->birthcity_datalist;
    }
//
//    //list of school to populate School choicelist
    public function schoolChoiceListData() {
        $this->school_datalist = $this->crud->readSortAsc($this->schoolService, 'wording');
        return $this->school_datalist;
    }
//    
//    //list of bloodgroup to populate BloodGroup choicelist
    public function bloodgroupChoiceListData() {
        $this->bloodgroup_datalist = new ArrayCollection();
        $this->bloodgroup_datalist->add("A-");
        $this->bloodgroup_datalist->add("A+");
        $this->bloodgroup_datalist->add("B-");
        $this->bloodgroup_datalist->add("B+");
        $this->bloodgroup_datalist->add("AB-");
        $this->bloodgroup_datalist->add("AB+");
        $this->bloodgroup_datalist->add("0-");
        $this->bloodgroup_datalist->add("0+");
        return $this->bloodgroup_datalist;
    }
//
    function getPostData() {
        $this->setLast_name(htmlspecialchars($_POST['lastname']));
        $this->setFirst_name(htmlspecialchars($_POST['firstname']));
        $this->setGuardian_name(htmlspecialchars($_POST['guardianname']));
        $this->setGuardian_phone(htmlspecialchars($_POST['guardianphone']));
        $this->setGuardian_mail(htmlspecialchars($_POST['guardianmail']));
        $this->setAdress(htmlspecialchars($_POST['adress']));
        $this->setBirth_date(htmlspecialchars($_POST['birthdate']));
        $this->setMatricule("ETIPM2021");
        $this->setBlood_group(htmlspecialchars($_POST['bloodgroup']));
        $this->fp->process($this->getBase_pictures_url());
        $this->setPicture($this->fp->getPicture_url());
        $this->setCreate_date(date('Y-m-d H:i:s'));
        $this->setGender($this->crud->findOne($this->genderService, htmlspecialchars($_POST['gender'])));
        $this->setBirth_city($this->crud->findOne($this->cityService, htmlspecialchars($_POST['birthcity'])));
        $this->setNationality($this->crud->findOne($this->countryService, htmlspecialchars($_POST['nationality'])));
        $this->setOld_school($this->crud->findOne($this->schoolService, htmlspecialchars($_POST['oldschool'])));
        $this->setMail(htmlspecialchars($_POST['email']));
        $this->setPhone(htmlspecialchars($_POST['phone']));
        $this->setPersoninfo(new PersonInfo($this->getLast_name(), $this->getFirst_name(), 
                $this->getGuardian_name(), $this->getGuardian_phone(), $this->getGuardian_mail(),
                $this->getPhone(), $this->getMail(), $this->getAdress(), $this->getBirth_date(),
                $this->getMatricule(), $this->getBlood_group(), $this->getPicture(), $this->getCreate_date(),
                $this->getGender(), $this->getBirth_city(), $this->getNationality(), $this->getOld_school(),
                $this->getNormalStatus()));
    }
//
    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->candidatService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentCandidat', $this->entity->getId());
            $this->session->set_userdata('candidat_id', 0);
            $this->layout->assignOne('countryselected', $entity->getCountry());
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('candidatwordingvalue', $entity->getWording());
            $this->layout->assignOne('candidatdescriptionvalue', $entity->getDescription());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->candidatService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setDescription($this->getDescription());
        if ($this->candidatService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentCandidat', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->candidatService, $this->entity);
//            $this->crud->deleteAllByEntity($this->candidatPermissionService, get_Class($this->entity));
            $this->candidatPermissionService->deleteAllByCandidat($this->entity);
            $candidatPermissions = new ArrayCollection();
            foreach ($this->getPermissionlist() as $permission) {
                $candidatPermissions->add(new CandidatPermission($permission, $this->entity, $this->getNormalStatus()));
            }
            $this->crud->createAll($this->candidatPermissionService, $candidatPermissions);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentCandidat', 0);
        }
    }

    function getPersoninfo() {
        return $this->personinfo;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getPhone() {
        return $this->phone;
    }

    function getMail() {
        return $this->mail;
    }

    function getGuardian_name() {
        return $this->guardian_name;
    }

    function getGuardian_mail() {
        return $this->guardian_mail;
    }

    function getGuardian_phone() {
        return $this->guardian_phone;
    }

    function getAdress() {
        return $this->adress;
    }

    function getBirth_date() {
        return $this->birth_date;
    }

    function getMatricule() {
        return $this->matricule;
    }

    function getBlood_group() {
        return $this->blood_group;
    }

    function getPicture() {
        return $this->picture;
    }

    function getCreate_date() {
        return $this->create_date;
    }

    function getGender() {
        return $this->gender;
    }

    function getBirth_city() {
        return $this->birth_city;
    }

    function getNationality() {
        return $this->nationality;
    }

    function getOld_school() {
        return $this->old_school;
    }

    function setPersoninfo($personinfo) {
        $this->personinfo = $personinfo;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setGuardian_name($guardian_name) {
        $this->guardian_name = $guardian_name;
    }

    function setGuardian_mail($guardian_mail) {
        $this->guardian_mail = $guardian_mail;
    }

    function setGuardian_phone($guardian_phone) {
        $this->guardian_phone = $guardian_phone;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setBirth_date($birth_date) {
        $this->birth_date = $birth_date;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    function setBlood_group($blood_group) {
        $this->blood_group = $blood_group;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    function setCreate_date($create_date) {
        $this->create_date = $create_date;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setBirth_city($birth_city) {
        $this->birth_city = $birth_city;
    }

    function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    function setOld_school($old_school) {
        $this->old_school = $old_school;
    }

}
