<?php

namespace daoImpl;

use dao\IPermissionDAO,
    dmapimpl\DAO,
    entities\Permission,
    entities\RolePermission,
    entities\Role;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IPermissionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of PermissionDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Permission entity
 */
class PermissionDAO extends DAO implements IPermissionDAO {

    public function __construct() {

        parent::__construct(Permission::class);
    }

    //put your code here
//        public function getAll() {
//            
//            $meta = $this->getEm()->getClassMetadata(Permission::class);
//            $tableName = $meta->getTableName();
//            $permissions = $this->getEm()->getConnection()->executeQuery('SELECT * FROM ' . $tableName)->fetchAll();
//            
//            return $permissions;
//        }

    /**
     * @param Permission $permission
     */
    public function addPermission($permission) {

        $query = "REPLACE INTO permissions
                      VALUE (" . $permission->getId() . " ,'" . $permission->getWording() . "', '" . $permission->getDescription() . "', " . $permission->getState() . " , 1)";

        $this->getEm()->getConnection()->executeUpdate($query);
    }

    public function getAllByRoleIdWithSortAndOrder($role_id) {
        if ($role_id != NULL || $role_id != "") {
            $query = $this->em->createQuery("SELECT p FROM " . Permission::class . " p, " . RolePermission::class . " rp, "
                    . "" . Role::class . " r WHERE rp.role = r AND rp.permission = p AND r.id = " . $role_id . " ORDER BY p.wording ASC");
            try {
//                print_r($query->getSql());
                return $query->getResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

    public function getAllByRoleWithSortAndOrder($role) {
        if ($role != NULL || $role != "") {
            $query = $this->em->createQuery("SELECT p FROM " . Permission::class . " p, " . RolePermission::class . " rp, "
                    . "" . Role::class . " r WHERE rp.role = r AND rp.permission = p AND r.id = " . $role->getId() . " ORDER BY p.wording ASC");
            try {
//                print_r($query->getSql());
                return $query->getResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
