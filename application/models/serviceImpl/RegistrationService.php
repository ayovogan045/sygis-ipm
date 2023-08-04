<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Registration;
use services\IRegistrationService,
    daoImpl\RegistrationDAO,
    dmapimpl\Service

;

require_once APPPATH . 'models/services/IRegistrationService.php';
require_once APPPATH . 'models/daoImpl/RegistrationDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of RegistrationServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Registration entity
 */
class RegistrationService extends Service implements IRegistrationService {

    private $registrationDAO;

    function __construct() {
        parent::__construct(Registration::class);
        $this->registrationDAO = new RegistrationDAO();
    }

    public function getAllByAcademicYear($academicyear) {
        return $this->getRegistrationDAO()->getAllByAcademicYear($academicyear);
    }

    public function getAllToClassroomByAcademicYear($academicyear) {
        return $this->getRegistrationDAO()->getAllToClassroomByAcademicYear($academicyear);
    }

    public function unregistration($pk) {
        return $this->getRegistrationDAO()->unregistration($pk);
    }

    function getRegistrationDAO() {
        return $this->registrationDAO;
    }

    function setRegistrationDAO($registrationDAO) {
        $this->registrationDAO = $registrationDAO;
    }

}
