<?php

namespace daoImpl;

use dao\IMentionDAO,
        dmapimpl\DAO;
use entities\Mention,
    entities\Grade;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/IMentionDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 ** Description of MentionDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of Mention entity
 */
class MentionDAO extends DAO implements IMentionDAO{
    //put your code here
    //put your code here
    public function __construct() {
        parent::__construct(Mention::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, ". Grade::class . " g WHERE e.state !=1 "
                    . "AND e.wording = " . "'" . $entity->getWording() . "'" . " "
                    . "AND e.code= " . "'" . $entity->getCode() . "'" . " "
                    . "AND e.grade= " . $entity->getGrade()->getId());
            
//                print_r($query->getSql()."".$query->getDql());
            try {
//               
//                print_r($query->getOneOrNullResult());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
