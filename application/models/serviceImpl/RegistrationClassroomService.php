<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\RegistrationClassroom;
use services\IRegistrationClassroomService,
    daoImpl\RegistrationClassroomDAO,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IRegistrationClassroomService.php';
require_once APPPATH . 'models/daoImpl/RegistrationClassroomDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of RegistrationClassroomServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of RegistrationClassroom entity
 */
class RegistrationClassroomService extends Service implements IRegistrationClassroomService {

    private $registrationClassroomDAO;

    function __construct() {
        parent::__construct(RegistrationClassroom::class);
        $this->registrationClassroomDAO = new RegistrationClassroomDAO();
    }

    public function getAllByYear($acyearId) {
        return $this->getRegistrationDAO()->getAllByYear($acyearId);
    }

    public function unregistration($pk) {
        return $this->getRegistrationDAO()->unregistration($pk);
    }

    function getRegistrationClassroomDAO() {
        return $this->registrationClassroomDAO;
    }

    function setRegistrationClassroomDAO($registrationClassroomDAO) {
        $this->registrationClassroomDAO = $registrationClassroomDAO;
    }

}
