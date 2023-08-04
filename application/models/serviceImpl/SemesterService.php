<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Semester;
use services\ISemesterService,
    dmapimpl\Service,
    daoImpl\SemesterDAO;

require_once APPPATH . 'models/services/ISemesterService.php';
require_once APPPATH . 'models/daoImpl/SemesterDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of SemesterServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Semester entity
 */
class SemesterService extends Service implements ISemesterService {

    private $SemesterDAO;

    public function __construct() {
        parent::__construct(Semester::class);
        $this->SemesterDAO = new SemesterDAO();
    }

    public function getOneExist($entity) {
        return $this->getSemesterDAO()->getOneExist($entity);
    }

    function getSemesterDAO() {
        return $this->SemesterDAO;
    }

    function setSemesterDAO($SemesterDAO) {
        $this->SemesterDAO = $SemesterDAO;
    }

}
