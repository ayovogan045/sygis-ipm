<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\RolePermission;
use services\IRolePermissionService,
    daoImpl\RolePermissionDAO,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IRolePermissionService.php';
require_once APPPATH . 'models/daoImpl/RolePermissionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of RolePermissionServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of RolePermission entity
 */
class RolePermissionService extends Service implements IRolePermissionService {

    private $rolePermissionDAO;

    public function __construct() {
        parent::__construct(RolePermission::class);
        $this->rolePermissionDAO = new RolePermissionDAO();
    }

    public function getAllByRoleWithSortAndOrder($role) {
        return $this->getRolePermissionDAO()->getAllByRole($role);
    }
    
    public function deleteAllByRole($role) {
        return $this->getRolePermissionDAO()->deleteAllByRole($role);
    }

    function getRolePermissionDAO() {
        return $this->rolePermissionDAO;
    }

    function setRolePermissionDAO($rolePermissionDAO) {
        $this->rolePermissionDAO = $rolePermissionDAO;
    }


}
