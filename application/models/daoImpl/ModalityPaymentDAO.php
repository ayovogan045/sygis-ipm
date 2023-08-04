<?php

namespace daoImpl;

use dao\IModalityPaymentDAO,
    dmapimpl\DAO;
use entities\ModalityPayment;
use entities\BlockPayment;
use entities\StepPayment;
use entities\FreePayment;
use entities\Subvention;
use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IModalityPaymentDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of ModalityPaymentDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of ModalityPayment entity
 */
class ModalityPaymentDAO extends DAO implements IModalityPaymentDAO {

    public function __construct() {
        parent::__construct(ModalityPayment::class);
    }
    
    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->andWhere('e.delay = :delay')
                    ->andWhere('e.stepNumber = :stepNumber')
                    ->andWhere('e.description = :description')
                    ->setParameter('state', 1)
                    ->setParameter('delay', $entity->getDelay())
                    ->setParameter('stepNumber', $entity->getStepNumber())
                    ->setParameter('description', $entity->getDescription());
            try {
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

    /**
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllBlockPayment() {
        $this->entity = BlockPayment::class;
        $list = new ArrayCollection();
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->setParameter('state', 1);
        try {
            $list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }

    /**
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllStepPayment() {
        $this->entity = StepPayment::class;
        $list = new ArrayCollection();
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->setParameter('state', 1);
        try {
            $list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }
    /**
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllFreePayment() {
        $this->entity = FreePayment::class;
        $list = new ArrayCollection();
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->setParameter('state', 1);
        try {
            $list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }
    /**
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllSubvention() {
        $this->entity = Subvention::class;
        $list = new ArrayCollection();
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->setParameter('state', 1);
        try {
            $list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }

}
