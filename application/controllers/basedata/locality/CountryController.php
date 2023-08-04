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

use serviceImpl\CountryService,
    entities\Country;

require_once APPPATH . 'models/serviceImpl/CountryService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of Country entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class CountryController extends BaseController {

    private $countryService;
    private $country_datalist;
    private $entity;
    private $wording;
    private $shortWording;
    private $code;
    private $nationality;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("countryform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Localité');
        $this->layout->assignOne('subactivelink', 'Edition de Pays');

        $this->countryService = new CountryService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function country() {
        $this->layout->assignOne('datalist', $this->list_country());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('country_id'));
        // show the template
        $this->layout->view('content/basedata/locality/country/countrypage.tpl');
    }

    //Country
    //add a new country to the database
    public function add_country() {
        // getting the differents values of fields
        $this->getPostData();
        
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentCountry') > 0) {
            $this->doUpdate($this->session->userdata('currentCountry'));
            $this->session->set_userdata('currentCountry', 0);
        } else {
            //create an country object
            $country = new Country($this->getWording(), $this->getShortWording(), $this->getCode(), $this->getNationality(), $this->getNormalStatus());
            if ($this->countryService->getOneExist($country) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new country to database
                $this->crud->create($this->countryService, $country);
                $this->layout->assignOne('success', "Enrégistrement du pays " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('datalist', $this->list_country());
        // show the template
        $this->layout->view('content/basedata/locality/country/countrypage.tpl');
    }

    //edit and update the status of the current country data to the database
    public function edit_country($country_id = 0) {
        $this->entity = $this->crud->findOne($this->countryService, $this->decryptionId($country_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('country_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/country'> abandonner</a> ");
            $this->country();
        }
    }

//update the status of the current country data to the database
    public function delete_country($country_id = 0) {
        $done = $this->crud->deleteOne($this->countryService, $this->decryptionId($country_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->country();
    }

//list the country data from the database
    public function list_country() {
        $this->country_datalist = $this->crud->readSortAsc($this->countryService, 'wording');
        return $this->country_datalist;
    }

    function getPostData() {
        $this->setWording(addslashes(htmlspecialchars($_POST['countrywording'])));
        $this->setShortWording(htmlspecialchars($_POST['countryshortwording']));
        $this->setCode(htmlspecialchars($_POST['countrycode']));
        $this->setNationality(htmlspecialchars($_POST['countrynationality']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->countryService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentCountry', $this->entity->getId());
            $this->session->set_userdata('country_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('countrywordingvalue', $entity->getWording());
            $this->layout->assignOne('countryshortwordingvalue', $entity->getShortWording());
            $this->layout->assignOne('countrycodevalue', $entity->getCode());
            $this->layout->assignOne('countrynationalityvalue', $entity->getNationality());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->countryService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setShortWording($this->getShortWording());
        $this->entity->setCode($this->getCode());
        $this->entity->setNationality($this->getNationality());
        if ($this->countryService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentCountry', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->countryService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentCountry', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getShortWording() {
        return $this->shortWording;
    }

    function getCode() {
        return $this->code;
    }

    function getNationality() {
        return $this->nationality;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setShortWording($shortWording) {
        $this->shortWording = $shortWording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setNationality($nationality) {
        $this->nationality = $nationality;
    }

}
