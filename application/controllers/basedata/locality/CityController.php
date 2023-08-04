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

use serviceImpl\CityService,
    serviceImpl\CountryService,
    entities\City;

require_once APPPATH . 'models/serviceImpl/CityService.php';
require_once APPPATH . 'models/serviceImpl/CountryService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of City entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class CityController extends BaseController {

    private $cityService;
    private $countryService;
    private $city_datalist;
    private $country_datalist;
    private $entity;
    private $wording;
    private $description;
    private $country;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignAll($this->config->item("cityform"));

        $this->layout->assignOne('openlink', 'Donnée de Base');
        $this->layout->assignOne('activelink', 'Localité');
        $this->layout->assignOne('subactivelink', 'Edition de ville');

        $this->cityService = new CityService();
        $this->countryService = new CountryService();
    }

    /**
     * Default function that will be executed unless another method specified
     * city
     */
    public function city() {
        $this->layout->assignOne('city_datalist', $this->list_city());
        $this->layout->assignOne('country_datalist', $this->countryChoiceListData());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Suppression éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('error', "Suppression echouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('city_id'));
        // show the template
        $this->layout->view('content/basedata/locality/city/citypage.tpl');
    }

    //add a new city to the database
    public function add_city() {
        // getting the differents values of fields
        $this->getPostData();

        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentCity') > 0) {
            $this->doUpdate($this->session->userdata('currentCity'));
            $this->session->set_userdata('currentCity', 0);
        } else {
            //create an city object
            $city = new City($this->getWording(), $this->getDescription(), $this->getNormalStatus(), $this->getCountry());
            if ($this->cityService->getOneExist($city) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new city to database
                $this->crud->create($this->cityService, $city);
                $this->layout->assignOne('success', "Enrégistrement de la ville " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('city_datalist', $this->list_city());
        $this->layout->assignOne('country_datalist', $this->countryChoiceListData());
        // show the template
        $this->layout->view('content/basedata/locality/city/citypage.tpl');
    }

    //edit and update the status of the current city data to the database
    public function edit_city($city_id = 0) {
        $this->entity = $this->crud->findOne($this->cityService, $this->decryptionId($city_id));
        if ($this->entity != NULL) {
            $this->session->set_userdata('city_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/city'> abandonner</a> ");
            $this->city();
        }
    }

    //update the status of the current city data to the database
    public function delete_city($city_id = 0) {
        $done = $this->crud->deleteOne($this->cityService, $this->decryptionId($city_id), $this->getDeleteStatus());
        $this->session->set_userdata('done', $done);
        $this->city();
    }

    //list the city data from the database
    public function list_city() {
        $this->city_datalist = $this->crud->readSortAsc($this->cityService, 'wording');
        return $this->city_datalist;
    }

    //list of country to populate Country choicelist
    public function countryChoiceListData() {
        $this->country_datalist = $this->crud->readSortAsc($this->countryService, 'wording');
        return $this->country_datalist;
    }

    public function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->cityService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentCity', $this->entity->getId());
            $this->session->set_userdata('city_id', 0);
        }
    }

    public function getPostData() {
        $this->setWording(htmlspecialchars($_POST['citywording']));
        $this->setDescription(htmlspecialchars($_POST['citydescription']));
        $this->setCountry($this->crud->findOne($this->countryService, htmlspecialchars($_POST['citycountry'])));
    }

    public function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('citywordingvalue', $entity->getWording());
            $this->layout->assignOne('citydescriptionvalue', $entity->getDescription());
            $this->layout->assignOne('countryselected', $entity->getCountry());
        }
    }

    public function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->cityService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setDescription($this->getDescription());
        $this->entity->setCountry($this->getCountry());
        if ($this->cityService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentCity', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->cityService, $this->entity);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentCity', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getDescription() {
        return $this->description;
    }

    function getCountry() {
        return $this->country;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setCountry($country) {
        $this->country = $country;
    }

}
