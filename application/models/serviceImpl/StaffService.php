<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Staff;
use services\IStaffService,
    daoImpl\StaffDAO,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IStaffService.php';
require_once APPPATH . 'models/serviceImpl/PersonInfoService.php';
require_once APPPATH . 'models/daoImpl/StaffDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *Description of StaffServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Staff entity
 */
class StaffService extends Service implements IStaffService {

    private $staffDAO;

    function __construct() {
        parent::__construct(Staff::class);
        $this->staffDAO = new StaffDAO();
    }

    function getStaffDAO() {
        return $this->staffDAO;
    }

    function setStaffDAO($staffDAO) {
        $this->staffDAO = $staffDAO;
    }

}
