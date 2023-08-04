<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use services\IClassroomService,
    dmapimpl\Service,
    entities\Classroom,
    daoImpl\ClassroomDAO;

require_once APPPATH . 'models/services/IClassroomService.php';
require_once APPPATH . 'models/daoImpl/ClassroomDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of ClassesServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Classes entity
 */
class ClassroomService extends Service implements IClassroomService {

    private $classroomDAO;

    /**
     * ClassesService constructor.
     */
    public function __construct() {
        parent::__construct(Classroom::class);
        $this->classroomDAO = new ClassroomDAO();
    }

    public function getOneExist($entity) {
        return $this->getClassroomDAO()->getOneExist($entity);
    }

    function getClassroomDAO() {
        return $this->classroomDAO;
    }

    function setClassroomDAO($classroomDAO) {
        $this->classroomDAO = $classroomDAO;
    }

}
