<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Permission;
use daoImpl\PermissionDAO;
use services\IPermissionService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IPermissionService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';
require_once APPPATH . 'models/daoImpl/PermissionDAO.php';

/**
 *  Description of PermissionServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Permission entity
 */
class PermissionService extends Service implements IPermissionService {

    private $permissionDAO;

    function __construct() {

        parent::__construct(Permission::class);
        $this->permissionDAO = new PermissionDAO();
    }

    public function getAll() {

        return $this->getPermissionDAO()->getAll();
    }

    public function addPermission($permission) {

        $this->permissionDAO->addPermission($permission);
    }

    public function addPermissions($permissions) {

        foreach ($permissions as $permission) {
            $this->addPermission($permission);
        }
    }

    public function getAllByRoleIdWithSortAndOrder($role_id) {
        return $this->getPermissionDAO()->getAllByRoleIdWithSortAndOrder($role_id);
    }

    public function getAllByRoleWithSortAndOrder($role) {
        return $this->getPermissionDAO()->getAllByRoleWithSortAndOrder($role);
    }

    function getPermissionDAO() {
        return $this->permissionDAO;
    }

    function setPermissionDAO($permissionDAO) {
        $this->permissionDAO = $permissionDAO;
    }

}
