<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Speciality;
use services\ISpecialityService,
    dmapimpl\Service,
    daoImpl\SpecialityDAO;

require_once APPPATH . 'models/services/ISpecialityService.php';
require_once APPPATH . 'models/daoImpl/SpecialityDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of SpecialityServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Speciality entity
 */
class SpecialityService extends Service implements ISpecialityService {

    private $specialityDAO;

    public function __construct() {
        parent::__construct(Speciality::class);
        $this->specialityDAO = new SpecialityDAO();
    }

    public function getOneExist($entity) {
        return $this->getSpecialityDAO()->getOneExist($entity);
    }

    function getSpecialityDAO() {
        return $this->specialityDAO;
    }

    function setSpecialityDAO($SpecialityDAO) {
        $this->specialityDAO = $SpecialityDAO;
    }

}
