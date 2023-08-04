<?php

namespace daoImpl;

use dao\IClassUnitDAO;
use dmapimpl\DAO,
    entities\ClassUnit;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IClassUnitDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of ClassUnitDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of ClassUni entity
 */
class ClassUnitDAO extends DAO implements IClassUnitDAO {

    //put your code here

    public function __construct() {
        parent::__construct(ClassUnit::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
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
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
