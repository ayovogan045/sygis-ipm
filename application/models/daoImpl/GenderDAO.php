<?php

namespace daoImpl;

use dao\IGenderDAO;
use dmapimpl\DAO;
use entities\Gender;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IGenderDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 *  Description of GenderDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Gender entity
 */
class GenderDAO extends DAO implements IGenderDAO {

    //put your code here
    public function __construct() {
        parent::__construct(Gender::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE e.state !=1 "
                    . "AND e.long_wording = "."'". $entity->getLong_wording() ."'"." "
                    . "AND e.medium_wording = "."'". $entity->getMedium_wording() ."'"." "
                    . "AND e.short_wording = "."'". $entity->getShort_wording() ."'"." "
                    . "ORDER BY e.long_wording ASC");
//            $query_builder = $this->em->createQueryBuilder();
//            $query_builder->select('e')
//                    ->from($this->entity, 'e')
//                    ->where('e.state != :state')
//                    ->andWhere('e.long_wording = :longWording')
//                    ->andWhere('e.medium_wording = :mediumWording')
//                    ->andWhere('e.short_wording = :shortWording')
//                    ->setParameter('state', 1)
//                    ->setParameter('longWording', $entity->getLong_wording())
//                    ->setParameter('mediumWording', $entity->getMedium_wording())
//                    ->setParameter('shortWording', $entity->getShort_wording());
            try {
//                return $query_builder->getQuery()->getOneOrNullResult();
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
