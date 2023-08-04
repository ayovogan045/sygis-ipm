<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Grade;
use services\IGradeService,
    dmapimpl\Service,
    daoImpl\GradeDAO;

require_once APPPATH . 'models/services/IGradeService.php';
require_once APPPATH . 'models/daoImpl/GradeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GradeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Grade entity
 */
class GradeService extends Service implements IGradeService {

    private $gradeDAO;

    public function __construct() {
        parent::__construct(Grade::class);
        $this->gradeDAO = new GradeDAO();
    }

    public function getOneExist($entity) {
        return $this->getGradeDAO()->getOneExist($entity);
    }

    function getGradeDAO() {
        return $this->gradeDAO;
    }

    function setGradeDAO($gradeDAO) {
        $this->gradeDAO = $gradeDAO;
    }

}
