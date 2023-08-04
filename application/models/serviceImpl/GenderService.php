<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Gender;
use services\IGenderService,
    dmapimpl\Service,
    daoImpl\GenderDAO;

require_once APPPATH . 'models/services/IGenderService.php';
require_once APPPATH . 'models/daoImpl/GenderDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of GenderServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Gender entity
 */
class GenderService extends Service implements IGenderService {

    private $genderDAO;

    public function __construct() {
        parent::__construct(Gender::class);
        $this->genderDAO = new GenderDAO();
    }
    
    public function getOneExist($entity) {
        return $this->getGenderDAO()->getOneExist($entity);
    }
    
    function getGenderDAO() {
        return $this->genderDAO;
    }

    function setGenderDAO($genderDAO) {
        $this->genderDAO = $genderDAO;
    }

}
