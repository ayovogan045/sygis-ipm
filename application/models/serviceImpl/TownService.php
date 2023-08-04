<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Town;
use services\ITownService,
    dmapimpl\Service,
    daoImpl\TownDAO;

require_once APPPATH . 'models/services/ITownService.php';
require_once APPPATH . 'models/daoImpl/TownDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of TownServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Town entity
 */
class TownService extends Service implements ITownService {

    private $townDAO;

    public function __construct() {
        parent::__construct(Town::class);
        $this->townDAO = new TownDAO();
    }

    public function getOneExist($entity) {
        return $this->getTownDAO()->getOneExist($entity);
    }

    function getTownDAO() {
        return $this->townDAO;
    }

    function setTownDAO($townDAO) {
        $this->townDAO = $townDAO;
    }



}
