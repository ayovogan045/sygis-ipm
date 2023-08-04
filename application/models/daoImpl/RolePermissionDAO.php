<?php

namespace daoImpl;

use dao\IRolePermissionDAO;
use dmapimpl\DAO;
use entities\RolePermission;
use entities\Role;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IRolePermissionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 *  Description of RolePermissionDAO
 *
 * @@author Xlencia
 * @Implement the data access object's interface of RolePermissionDAO entity
 */
class RolePermissionDAO extends DAO implements IRolePermissionDAO {

    public function __construct() {
        parent::__construct(RolePermission::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE "
                    . "e.id = " . "'" . $entity->getId() . "'" . " "
                    . "ORDER BY e.wording ASC");
            try {
//                print_r($query->getSql());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

    public function getAllByRoleWithSortAndOrder($role) {
        if ($role != NULL || $role != "") {
            $query = $this->em->createQuery("SELECT rp FROM " . $this->entity . " rp, " . Role::class . " r "
                    . "WHERE rp.role = r AND r.id = " . $role->getId() . " ORDER BY r.wording ASC");
            try {
//                print_r($query->getSql());
                return $query->getResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

    public function deleteAllByRole($role) {
        $query = $this->em->createQuery("DELETE FROM " . $this->entity . " rp "
                . "WHERE rp.role = (SELECT r FROM  " . Role::class . " r WHERE r.id = " . $role->getId() . ")");
//        print_r($query->getSql());
        $query->execute();
    }

}
