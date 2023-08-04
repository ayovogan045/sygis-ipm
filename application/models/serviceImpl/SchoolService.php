<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\School;
use services\ISchoolService,
    dmapimpl\Service,
    daoImpl\SchoolDAO;

require_once APPPATH . 'models/services/ISchoolService.php';
require_once APPPATH . 'models/daoImpl/SchoolDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of SchoolServiceImpl
 *
 * @author mundhaka
 */
class SchoolService extends Service implements ISchoolService {

    private $schoolDAO;

    public function __construct() {
        parent::__construct(School::class);
        
        $this->schoolDAO = new SchoolDAO();
    }

    public function getOneExist($entity) {
        return $this->getSchoolDAO()->getOneExist($entity);
    }

    function getSchoolDAO() {
        return $this->schoolDAO;
    }

    function setSchoolDAO($schoolDAO) {
        $this->schoolDAO = $schoolDAO;
    }

}
