<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\AcademicYear;
use services\IAcademicYearService,
    dmapimpl\Service,
    daoImpl\AcademicYearDAO;

require_once APPPATH . 'models/services/IAcademicYearService.php';
require_once APPPATH . 'models/daoImpl/AcademicYearDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of AcademicYearService
 *
 * @author Xlencia
 * @Implement the service interface of AcademicYear entity
 */
class AcademicYearService extends Service implements IAcademicYearService {

    private $academicYearDAO;

    public function __construct() {
        parent::__construct(AcademicYear::class);
        $this->academicYearDAO = new AcademicYearDAO();
    }

    public function getOneExist($entity) {
        return $this->getAcademicYearDAO()->getOneExist($entity);
    }

    public function activated($pk) {
        $this->getAcademicYearDAO()->activated($pk);
    }

    public function desactivated($pk) {
        $this->getAcademicYearDAO()->desactivated($pk);
    }

    /**
     * @return AcademicYear|null
     */
    public function getActivated() {
        return $this->getAcademicYearDAO()->getActivated();
    }

    public function getCurrent() {
        $this->getAcademicYearDAO()->getCurrent();
    }

    function getAcademicYearDAO() {
        return $this->academicYearDAO;
    }

    function setAcademicYearDAO($academicYearDAO) {
        $this->academicYearDAO = $academicYearDAO;
    }

}
