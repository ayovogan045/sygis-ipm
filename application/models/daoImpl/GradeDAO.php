<?php

namespace daoImpl;

use dao\IGradeDAO;
use dmapimpl\DAO;
use entities\Grade,
    entities\Level;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IGradeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of GradeDAO
 *
 *  @author Xlencia
 * @Implement the data access object's interface of Grade entity
 */
class GradeDAO extends DAO implements IGradeDAO {

    //put your code here
    public function __construct() {
        parent::__construct(Grade::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
//               $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, ". Level::class . " l WHERE e.state !=1 "
//                    . "AND e.wording = " . "'" . $entity->getWording() . "'" . " "
//                    . "AND e.code= " . "'" . $entity->getCode() . "'" . " "
//                    . "AND e.level= " . $entity->getLevel());
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->andWhere('e.wording = :wording')
                    ->andWhere('e.code = :code')
                    ->andWhere('e.level = :level')
                    ->setParameter('state', 1)
                    ->setParameter('wording', $entity->getWording())
                    ->setParameter('code', $entity->getCode())
                    ->setParameter('level', $entity->getLevel());
            try {
//                print_r($query_builder->getQuery()->getSql());
//                print_r($query->getSql()."".$query->getDql());
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
