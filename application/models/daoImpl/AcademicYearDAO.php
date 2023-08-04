<?php

namespace daoImpl;

use Doctrine\ORM\NoResultException;
use dao\IAcademicYearDAO,
    dmapimpl\DAO;
use entities\AcademicYear;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IAcademicYearDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of AcademicYearDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of AcademicYear entity
 */
class AcademicYearDAO extends DAO implements IAcademicYearDAO {

    public function __construct() {
        parent::__construct(AcademicYear::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE e.state !=1 "
                    . "AND e.wording = "."'". $entity->getWording() ."'"." "
                    . "AND e.code = "."'". $entity->getCode() ."'"." "
                    . "ORDER BY e.id DESC");
            try {   
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

    /**
     * @param $pk
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function activated($pk) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state AND e.id = :id')
                ->setParameter('state', 1)
                ->setParameter('id', $pk);
        $entity = $query_builder->getQuery()->getSingleResult();
        $entity->setActiveyear(1);
        $this->updateOne($entity);
    }

    /**
     * @param $pk
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function desactivated($pk) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state AND e.id = :id')
                ->setParameter('state', 1)
                ->setParameter('id', $pk);
        $entity = $query_builder->getQuery()->getSingleResult();
        $entity->setActiveyear(0);
        $this->updateOne($entity);
    }

    /**
     * @return AcademicYear|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Doctrine\ORM\NoResultException
     */
    public function getActivated() {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state = :state')
                ->setParameter('state', "Oui");
        try {
            return $query_builder->getQuery()->getSingleResult();
        } catch (NoResultException $ex) {
            return NULL;
        }
    }

    /**
     * @return array
     */
    public function getCurrent() {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.current = :current')
                ->setParameter('current', 1);
        try {
            $datalist = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
        }
        return $datalist;
    }

//put your code here
}
