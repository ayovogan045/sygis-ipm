<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\LessonUnitMention;
use services\ILessonUnitMentionService,
    dmapimpl\Service,
    daoImpl\LessonUnitMentionDAO;

require_once APPPATH . 'models/services/ILessonUnitMentionService.php';
require_once APPPATH . 'models/daoImpl/LessonUnitMentionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of LessonUnitMentionServiceImpl
 *
 * @author mundhaka
 */
class LessonUnitMentionService extends Service implements ILessonUnitMentionService {

    private $lessonUnitMentionDAO;

    public function __construct() {
        parent::__construct(LessonUnitMention::class);
        $this->lessonUnitMentionDAO = new LessonUnitMentionDAO();
    }

    public function getOneExist($entity) {
        return $this->getLessonUnitMentionDAO()->getOneExist($entity);
    }

    function getLessonUnitMentionDAO() {
        return $this->lessonUnitMentionDAO;
    }

    function setLessonUnitMentionDAO($lessonUnitMentionDAO) {
        $this->lessonUnitMentionDAO = $lessonUnitMentionDAO;
    }

}
