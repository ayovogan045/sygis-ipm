<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\LessonUnit;
use services\ILessonUnitService,
    dmapimpl\Service,
    daoImpl\LessonUnitDAO;

require_once APPPATH . 'models/services/ILessonUnitService.php';
require_once APPPATH . 'models/daoImpl/LessonUnitDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of LessonUnitServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of LessonUnitMention entity
 */
class LessonUnitService extends Service implements ILessonUnitService {

    private $lessonunitDAO;

    public function __construct() {
        parent::__construct(LessonUnit::class);
        $this->lessonunitDAO = new LessonUnitDAO();
    }

    public function getOneExist($entity) {
        return $this->getLessonunitDAO()->getOneExist($entity);
    }
    function getLessonunitDAO() {
        return $this->lessonunitDAO;
    }

    function setLessonunitDAO($lessonunitDAO) {
        $this->lessonunitDAO = $lessonunitDAO;
    }



}
