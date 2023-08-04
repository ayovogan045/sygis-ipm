<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\City;
use services\ICityService,
    dmapimpl\Service,
    daoImpl\CityDAO;

require_once APPPATH . 'models/services/ICityService.php';
require_once APPPATH . 'models/daoImpl/CityDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of CityServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of City entity
 */
class CityService extends Service implements ICityService {

    private $cityDAO;

    public function __construct() {
        parent::__construct(City::class);
        $this->cityDAO = new CityDAO();
    }

    public function getOneExist($entity) {
        return $this->getCityDAO()->getOneExist($entity);
    }

    function getCityDAO() {
        return $this->cityDAO;
    }

    function setCityDAO($cityDAO) {
        $this->cityDAO = $cityDAO;
    }

}
