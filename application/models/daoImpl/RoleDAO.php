<?php

namespace daoImpl;

use dao\IRoleDAO;
use dmapimpl\DAO;
use entities\Role;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IRoleDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of AgenceDAO
 *
 * @author amen
 */
class RoleDAO extends DAO implements IRoleDAO {

    //put your code here
    private $query;

    public function __construct() {
        parent::__construct(Role::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            if ($entity->getId() != NULL) {
                $this->query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE "
                        . "e.wording = " . "'" . $entity->getWording() . "'" . " AND e.id != " . $entity->getId() . "");
            } else {
                $this->query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE "
                        . "e.wording = " . "'" . $entity->getWording() . "'");
            }

            try {
//                print_r($this->query->getSql());
                return $this->query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
