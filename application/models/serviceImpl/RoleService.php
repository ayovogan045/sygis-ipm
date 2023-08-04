<?php

namespace serviceImpl;

use entities\Role;
use daoImpl\RoleDAO,
    daoImpl\RolePermissionDAO;
use services\IRoleService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IRoleService.php';
require_once APPPATH . 'models/daoImpl/RoleDAO.php';
require_once APPPATH . 'models/daoImpl/RolePermissionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  Description of RoleServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Role entity
 */
class RoleService extends Service implements IRoleService {

    //put your code here

    private $roleDAO;
    private $rolePermissionDAO;

    public function __construct() {
        parent::__construct(Role::class);
        $this->roleDAO = new RoleDAO();
        $this->rolePermissionDAO = new RolePermissionDAO();
    }

    public function getOneExist($entity) {
        return $this->roleDAO->getOneExist($entity);
    }

    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        $roles = parent::getAllWithSortAndOrder($sortProperty, $sortAsc);
        foreach ($roles as $role) {
            $role->setRole_permissions($this->rolePermissionDAO->getAllByRoleWithSortAndOrder($role));
        }
//        print_r($role->getRole_permissions()[0]->getPermission()->getWording());
        return $roles;
    }

//    /**
//     * @param Role $role
//     * @throws \Doctrine\DBAL\DBALException
//     */
//    public function add($role) {
//
//        return $this->roleDAO->add($role);
//    }
//
//    /**
//     * @param array Role $roles
//     * @throws \Doctrine\DBAL\DBALException
//     */
//    public function addMany($roles) {
//
//        return $this->roleDAO->addMany($roles);
//    }
}
