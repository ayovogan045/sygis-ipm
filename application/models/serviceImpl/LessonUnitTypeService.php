<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\LessonUnitType;
use services\ILessonUnitTypeService,
    dmapimpl\Service,
    daoImpl\LessonUnitTypeDAO;

require_once APPPATH . 'models/services/ILessonUnitTypeService.php';
require_once APPPATH . 'models/daoImpl/LessonUnitTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of LessonUnitTypeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of LessonUnitType entity
 */
class LessonUnitTypeService extends Service implements ILessonUnitTypeService {

    private $lessonUnitTypeDAO;

    public function __construct() {
        parent::__construct(LessonUnitType::class);
        $this->lessonUnitTypeDAO = new LessonUnitTypeDAO();
    }

    public function getOneExist($entity) {
        return $this->getLessonUnitTypeDAO()->getOneExist($entity);
    }

    function getLessonUnitTypeDAO() {
        return $this->lessonUnitTypeDAO;
    }

    function setLessonUnitTypeDAO($lessonUnitTypeDAO) {
        $this->lessonUnitTypeDAO = $lessonUnitTypeDAO;
    }

}
