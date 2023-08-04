<?php

namespace serviceImpl;

use entities\UserRole;
use services\IUserRoleService,
        dmapimpl\Service,
    daoImpl\UserRoleDAO;

require_once APPPATH.'third_party/dmap/dmapimpl/Service.php';
require_once APPPATH . 'models/services/IUserRoleService.php';
require_once APPPATH . 'models/daoImpl/UserRoleDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  Description of UserRoleServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of UserRole entity
 */
class UserRoleService extends Service implements IUserRoleService {

    private $userRoleDAO;

    function __construct() {
        parent::__construct(UsersRole::class);
        $this->userRoleDAO = new UserRoleDAO();
    }

    public function getOne($object) {
        return $this->userRoleDAO->getOne($object);
    }
    public function saveAll($objects) {
        return $this->userRoleDAO->saveAll($objects);
    }

    public function saveOne($object) {
        return $this->userRoleDAO->saveOne($object);
    }
    function getUserRoleDAO() {
        return $this->userRoleDAO;
    }

    function setUserRoleDAO($userRoleDAO) {
        $this->userRoleDAO = $userRoleDAO;
    }


}
