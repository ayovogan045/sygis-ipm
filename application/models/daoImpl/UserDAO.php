<?php

namespace daoImpl;

use dao\IUserDAO,
    dmapimpl\DAO;
use entities\Role;
use entities\Users;
use entities\UserRole;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IUserDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of UserDAO
 *
 * @author amen
 */
class UserDAO extends DAO implements IUserDAO {

    public function __construct() {
        parent::__construct(Users::class);
    }

    public function saveAll($objects) {

        foreach ($objects as $object) {
            $this->saveOne($object);
        }
    }
    
    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        return parent::getAllWithSortAndOrder($sortProperty, $sortAsc);
    }


//    public function saveOne($object) {
//
//        $userTable = $this->em->getClassMetadata(Users::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('INSERT INTO ' . $userTable .
//                '(staff_id, login, password, state, validated) '
//                . 'VALUES(' . $object[0] . ",'" . $object[1] . "','" . $object[2] . "'," . $object[3] . ",'"
//                . $object[4] . "')");
//        $stmt->execute();
//    }
    public function getOneByLogin($login) {

        return $this->em->getRepository(Users::class)->findOneByLogin($login);
    }

    /**
     * @param Users $user
     */
    public function getRole($user) {

        $userTable = $this->em->getClassMetadata(Users::class)->getTableName();
        $usersRoleTable = $this->em->getClassMetadata(UsersRole::class)->getTableName();
        $stmt = $this->em->getConnection()
                ->query('SELECT * FROM ' . $usersRoleTable . ' r '
                . 'WHERE r.academic_year_id = ' . $pk . ' AND f.state != 1 ');
    }

    public function getPermission($user) {
        // TODO: Implement getPermission() method.
    }

}
