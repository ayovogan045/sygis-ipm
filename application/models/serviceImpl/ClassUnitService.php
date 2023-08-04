<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\ClassUnit;
use services\IClassUnitService,
    daoImpl\ClassUnitDAO,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IClassUnitService.php';
require_once APPPATH . 'models/daoImpl/ClassUnitDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of ClassUnitServiceImpl
 *
 * @author mundhaka
 */
class ClassUnitService extends Service implements IClassUnitService {

    private $classUnitDAO;

    public function __construct() {
        parent::__construct(ClassUnit::class);
        $this->classUnitDAO = new ClassUnitDAO();
    }

    public function getOneExist($entity) {
        return $this->getClassUnitDAO()->getOneExist($entity);
    }

    function getClassUnitDAO() {
        return $this->classUnitDAO;
    }

    function setClassUnitDAO($classUnitDAO) {
        $this->classUnitDAO = $classUnitDAO;
    }

}
