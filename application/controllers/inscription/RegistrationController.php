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
    entities\Registration;
use serviceImpl\PersonInfoService;
use serviceImpl\CandidatService;
use serviceImpl\InscriptionService;
use serviceImpl\AcademicYearService,
    serviceImpl\RegistrationService;
use Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/serviceImpl/PersonInfoService.php';
require_once APPPATH . 'models/serviceImpl/CandidatService.php';
require_once APPPATH . 'models/serviceImpl/InscriptionService.php';
require_once APPPATH . 'models/serviceImpl/AcademicYearService.php';
require_once APPPATH . 'models/serviceImpl/RegistrationService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Role entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class RegistrationController extends BaseController {

    private $candidatService;
    private $inscriptionService;
    private $personinfoService;
    private $academicyearService;
    private $registrationService;
    private $registration_datalist;
    private $entity;
    private $candidat;
    private $inscription;
    private $candidat_datalist;
    private $inscription_datalist;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignOne('addnewlink', 'inscription/RegistrationController/newregistration');
        $this->layout->assignOne('listlink', 'inscription/RegistrationController/registrationlist');
        $this->layout->assignAll($this->config->item("registrationform"));

        $this->layout->assignOne('openlink', 'Inscription');
        $this->layout->assignOne('activelink', '');
        $this->layout->assignOne('subactivelink', 'Liste des candidats inscrits validés');

        $this->candidatService = new CandidatService();
        $this->inscriptionService = new InscriptionService();
        $this->personinfoService = new PersonInfoService();
        $this->academicyearService = new AcademicYearService();
        $this->registrationService = new RegistrationService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function registration() {
        $this->layout->assignOne('registrationdatalist', $this->list_registration());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "validation éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "validation echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('registration_id'));
        // show the template
        $this->layout->view('content/inscription/registration/registrationlistpage.tpl');
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function newregistration() {
        $this->registration_datalist = new ArrayCollection($this->list_registration());
        $this->inscription_datalist = new ArrayCollection($this->inscriptionService->getAllToRegistration(
                        $this->academicyearService->getActivated()));
//        $this->inscription_datalist = new ArrayCollection($this->inscriptionService->getAllWithSortAndOrder("candidat", "ASC"));
//        foreach ($this->registration_datalist as $registration) {
//            $this->inscription_datalist->removeElement($registration->getInscription());
//        }
        $this->layout->assignOne('inscriptiondatalist', $this->inscription_datalist);
        $this->layout->assignOne('registrationdatalist', $this->registration_datalist);

        // show the template
        $this->layout->assignOne('addnewlink', '../../../index.php/inscription/RegistrationController/newregistration');
        $this->layout->assignOne('listlink', '../../../index.php/inscription/RegistrationController/registrationlist');
        $this->layout->assignOne('subactivelink', 'Validation des candidats inscrits');

        $this->layout->view('content/inscription/registration/registrationformpage.tpl');
    }

    //Role
    //add a new registration to the database
    public function add_registration() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentRegistration') > 0) {
            $this->doUpdate($this->session->userdata('currentRegistration'));
            $this->session->set_userdata('currentRegistration', 0);
        } else {
            //create an registration object
            //proccess to add a new registration to database   
            $registrations = new ArrayCollection();
            $this->registration_datalist = $this->registrationService->getAllByAcademicYear(
                    $this->academicyearService->getActivated());
            if ($this->registration_datalist != NULL) {
                foreach ($this->getInscription_datalist() as $inscription) {
                    if ($inscription != NULL) {
//                    print_r("-----" . $inscription . "//");
                        foreach ($this->registration_datalist as $r) {
                            if ($r->getInscription() != $inscription) {
                                $registrations->add(new Registration(date("F j, Y, g:i a"), $this->getNormalStatus(),
                                                $this->academicyearService->getActivated(), $inscription));
                            }
                        }
                    }
                }
            } else {
                foreach ($this->getInscription_datalist() as $inscription) {
                    $registrations->add(new Registration(date("F j, Y, g:i a"), $this->getNormalStatus(),
                                    $this->academicyearService->getActivated(), $inscription));
                }
            }

            $this->crud->createAll($this->registrationService, $registrations);
            $this->layout->assignOne('success', "Validation effective ");
        }
        $this->layout->assignOne('registrationdatalist', $this->list_registration());

        $this->layout->assignOne('addnewlink', '../index.php/inscription/RegistrationController/newregistration');
        $this->layout->assignOne('listlink', '../index.php/inscription/RegistrationController/registrationlist');
        // show the template
        $this->layout->view('content/inscription/registration/registrationlistpage.tpl');
    }

    //list of registration
    public function registrationlist() {
        $this->layout->assignOne('registrationdatalist', $this->list_registration());

        $this->layout->assignOne('addnewlink', '../../../index.php/inscription/RegistrationController/newregistration');
        $this->layout->assignOne('listlink', '../../../index.php/inscription/RegistrationController/registrationlist');
        // show the template
        $this->layout->view('content/inscription/registration/registrationlistpage.tpl');
    }

    //edit and update the status of the current role data to the database
    public function edit_registration($role_id = 0) {
        $this->entity = $this->crud->findOne($this->candidatService, $this->decryptionId($role_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('role_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/role'> abandonner</a> ");
            $this->newrole();
        }
    }

//list the registration data from the database
    public function list_registration() {
        $this->registration_datalist = $this->registrationService->getAllByAcademicYear(
                $this->academicyearService->getActivated());
        return $this->registration_datalist;
    }

    function getPostData() {
        $this->setInscription_datalist($this->crud->findAll($this->inscriptionService, $_POST['inscriptionselectedlist']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->candidatService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentRole', $this->entity->getId());
            $this->session->set_userdata('role_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('rolewordingvalue', $entity->getWording());
            $this->layout->assignOne('roledescriptionvalue', $entity->getDescription());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->candidatService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setDescription($this->getDescription());
        if ($this->candidatService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentRole', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->candidatService, $this->entity);
//            $this->crud->deleteAllByEntity($this->rolePermissionService, get_Class($this->entity));
            $this->registrationService->deleteAllByRole($this->entity);
            $rolePermissions = new ArrayCollection();
            foreach ($this->getPermissionlist() as $permission) {
                $rolePermissions->add(new RolePermission($permission, $this->entity, $this->getNormalStatus()));
            }
            $this->crud->createAll($this->registrationService, $rolePermissions);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentRole', 0);
        }
    }

    public function getCandidat() {
        return $this->candidat;
    }

    public function getInscription() {
        return $this->inscription;
    }

    public function getCandidat_datalist() {
        return $this->candidat_datalist;
    }

    public function getInscription_datalist() {
        return $this->inscription_datalist;
    }

    public function setCandidat($candidat): void {
        $this->candidat = $candidat;
    }

    public function setInscription($inscription): void {
        $this->inscription = $inscription;
    }

    public function setCandidat_datalist($candidat_datalist): void {
        $this->candidat_datalist = $candidat_datalist;
    }

    public function setInscription_datalist($inscription_datalist): void {
        $this->inscription_datalist = $inscription_datalist;
    }
}
