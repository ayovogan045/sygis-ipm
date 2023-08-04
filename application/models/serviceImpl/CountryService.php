<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Country;
use services\ICountryService,
    dmapimpl\Service,
    daoImpl\CountryDAO;

require_once APPPATH . 'models/services/ICountryService.php';
require_once APPPATH . 'models/daoImpl/CountryDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of CountryServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Country entity
 */
class CountryService extends Service implements ICountryService {

    private $countryDAO;

    public function __construct() {
        parent::__construct(Country::class);
        $this->countryDAO = new CountryDAO();
    }

    public function getOneExist($entity) {
        return $this->getCountryDAO()->getOneExist($entity);
    }

    function getCountryDAO() {
        return $this->countryDAO;
    }

    function setCountryDAO($countryDAO) {
        $this->countryDAO = $countryDAO;
    }

}
