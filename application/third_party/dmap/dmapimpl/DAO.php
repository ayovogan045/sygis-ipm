<?php

namespace dmapimpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine,
    Doctrine\ORM\NonUniqueResultException,
    Doctrine\ORM\NoResultException,
    Doctrine\ORM\Query,
    Doctrine\Common\Collections\ArrayCollection,
    idmap\IDAO;

//    Doctrine\ORM\Mapping\ClassMetadata,
require_once APPPATH . 'third_party/dmap/idmap/IDAO.php';
require_once BASEPATH . '/libraries/Doctrine.php';

/**
 * implémente l'interface IDAO
 * @author amen
 */
class DAO implements IDAO {

    protected $em;
    protected $entity;
    protected $doctrine;
    protected $list;

    public function __construct($entity) {
        $this->doctrine = Doctrine::getInstance();
        $this->em = $this->doctrine->getEm();
        $this->entity = $entity;
        $this->em->getConnection();
    }

    /**
     * @return int|mixed
     */
    public function count() {
        $count = 0;
        $query = $this->em->createQuery('SELECT COUNT(e) FROM '
                . $this->entity . ' e');
        try {
            $count = $query->getSingleResult();
        } catch (NonUniqueResultException $ex) {
//            $ex->getMessage();
        }
        return $count;
    }

    /**
     * @return int
     */
    public function size() {
        return count($this->getAll());
    }

    public function deleteAll() {
        $query = $this->em->createQuery('DELETE FROM ' . $this->entity);
        $query->execute();
    }
    
    public function deleteAllByEntity($entity) {
        $query = $this->em->createQuery("DELETE FROM " . $this->entity . " e WHERE e.'" . $entity . "' = " . $entity);
//        print_r($query->getSql());
//        $query = $this->em->createQuery('DELETE FROM ' . $this->entity);
//        $query->execute();
    }

    /**
     * @param $entity
     * @return bool
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     */
    public function deleteOne($entity) {
        $current = $this->em->getRepository($this->entity)->find($entity->getId());
        if ($current === null) {
            return FALSE;
        }
        $this->em->remove($current);
        $this->em->flush();
        return true;
    }

    /**
     * @param $pk
     * @return bool
     * @throws \Doctrine\ORM\TransactionRequiredException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\ORMException
     */
    public function deleteOneById($pk) {
        $entity = $this->em->find($this->entity, $pk);
        if ($entity === null) {
            return FALSE;
        }
        $this->em->remove($entity);
        $this->em->flush();
        return true;
    }

    /**
     * @param $entity
     * @return bool
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     */
    public function deleteStateAll($entity) {
        $current = $this->em->getRepository($this->entity)->find($entity->getId());
        if ($current === null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    /**
     * @param $object
     * @return bool
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function deleteStateOne($entity) {
        $current = $this->em->getRepository($this->entity)->find($entity->getId());
        if ($current === null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    /**
     * @param $pk
     * @return bool
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     */
    public function deleteStateOneById($pk) {
        $current = $this->em->getRepository($this->entity)->find($pk);
        if ($current === null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    /**
     * @param Query $query
     * @return mixed
     */
    public function executeQuery(Query $query) {
        try {
//                print_r($query->getSql());     
            return $query->getResult();
        } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
            $ex->getMessage();
        }
        return NULL;
    }

    /**
     * @param Query $query
     * @return mixed
     */
    public function executeUpdate(Query $query) {
        return $query->execute();
    }

    /**
     * @return array|ArrayCollection
     */
    public function getAll() {
        $list = new ArrayCollection();
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->setParameter('state', 1);
//        print_r($query_builder->getQuery()->getSql());
        try {
            $list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
//        return $datalist;
//        $query = $this->em->getRepository($this->entity);
//        try {
//            $list = $query->findAll();
//        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
//        }
        return $list;
    }

    /**
     * @param $sortProperty
     * @param $sortAsc
     * @return array
     */
    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        $list = new ArrayCollection();
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->orderBy('e.' . $sortProperty, "$sortAsc")
                ->setParameter('state', 1);
//               print_r($query_builder->getQuery()->getSql());
        try {
            $list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }

    /**
     * @param $first
     * @param $count
     * @param $sortProperty
     * @param $sortAsc
     * @return ArrayCollection
     */
    public function getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc) {
        $list = new ArrayCollection();
        $query = $this->em->createQuery('SELECT e FROM ' . $this->entity . ' e '
                . 'ORDER BY e' . $sortProperty(($sortAsc) ? ' ASC' : ' DESC'));

        $query->setFirstResult($first);
        $query->setMaxResults($count);
        try {
            $list = $query->getResultList();
        } catch (NoResultException $ex) {
//            $ex->getMessage();
        }
        return $list;
    }

    /**
     * @param $first
     * @param $count
     * @param $sortPropertyInfosCollection
     * @return ArrayCollection
     */
    public function getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection) {
        $list = new ArrayCollection();
        $query = $this->em . createQuery('SELECT e FROM ' . $this->entity . ' e ' . $this->getOrderFragment($sortPropertyInfosCollection));
        $query->setFirstResult($first);
        $query->setMaxResults($count);
        try {
            $list = $query->getResultList();
        } catch (NoResultException $ex) {
//            $ex->getMessage();
        }
        return $list;
    }

    /**
     * @param $sortPropertyInfosCollection
     * @return ArrayCollection
     */
    public function getAllWithArraySort($sortPropertyInfosCollection) {
        $list = new ArrayCollection();
        $query = $this->em . createQuery('SELECT e FROM ' . $this->entity . ' e '
                        . $this . getOrderFragment($sortPropertyInfosCollection));
        $query->setFirstResult($first);
        $query->setMaxResults($count);
        try {
            $list = $query->getResultList();
        } catch (NoResultException $ex) {
//            $ex->getMessage();
        }
        return $list;
    }

    public function getLast() {
        $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e WHERE e.state!=1 ORDER BY e.id DESC");
        try {
            return $query->getResult()[0];
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
        }
        return null;
    }

    public function getLastId() {
        $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE e.state!=1 ORDER BY e.id DESC");
        try {
            return $query->getResult()[0];
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
        }
        return null;
    }

    public function getOne($pk) {
        if ($pk != NULL || $pk != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state AND e.id = :id')
                    ->setParameter('state', 1)
                    ->setParameter('id', $pk);
            try {
                return $query_builder->getQuery()->getSingleResult();
            } catch (NoResultException $ex) {
//                $ex->getMessage();
            }
            return NULL;
        }

//        $this->em->getRepository('entities\\' . $this->entity)->find($pk);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state AND e.id = :id')
                    ->setParameter('state', 1)
                    ->setParameter('id', $entity->getId());
            try {
                return $query_builder->getQuery()->getSingleResult();
            } catch (NoResultException $ex) {
//                $ex->getMessage();
            }
            return NULL;
        }
    }

    /**
     * @param $pks
     * @return ArrayCollection
     */
    public function getMany($pks) {
        $objectList = new ArrayCollection();
        foreach ($pks as $pk) {
            $objectList->add($this->getOne($pk));
        }
        return $objectList;
    }

    /**
     * @param ArrayCollection $entities
     * @return ArrayCollection
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveAll($entities) {
        foreach ($entities as $obj) {
            $this->em->persist($obj);
            $this->em->flush();
        }
        return $entities;
    }

    public function saveOne($entity) {
        $this->em->persist($entity);
        $this->em->flush();
//        return $object;
    }

    /**
     * @param $entity
     * @return bool
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     */
    public function updateOne($entity) {
        $done = 0;
        if ($entity === null) {
            $done = 0;
        }
        try {
            $this->em->merge($entity);
            $this->em->flush();
            $done = 1;
        } catch (\Exception $ex) {
//            $ex->getMessage();
        }
        return $done;
    }

    /**
     * @param $pk
     * @return bool
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateOneById($pk) {
        $current = $this->em->getRepository($this->entity)->find($pk);
        if ($current === null) {
            return FALSE;
        }
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }

    /**
     * @param $sortPropertyInfosCollection
     * @return mixed
     */
    protected function getOrderFragment($sortPropertyInfosCollection) {
        return $this->getOrderFragment($sortPropertyInfosCollection, 'e');
    }

    /**
     * @param $sortPropertyInfosCollection
     * @param $prefix
     * @return string
     */
    protected function getOrderFragments($sortPropertyInfosCollection, $prefix) {
        if ($sortPropertyInfosCollection === null) {
            return '';
        }
        $orderFragmentBuilder = 'ORDER BY';
        $i = 1;
        foreach ($sortPropertyInfosCollection as $spi) {
            $orderFragmentBuilder . ' ';
            $orderFragmentBuilder . $spi->getDQLFragment($prefix);
            if ($i < sizeof($sortPropertyInfosCollection)) {
                $orderFragmentBuilder . ",";
            }
            $i++;
        }
        return $orderFragmentBuilder;
    }
    
    
    /**
     * @return mixed|null
     */
    public function getActivated() {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state AND e.current = :current')
                ->setParameter('state', 1)
                ->setParameter('current', "Oui");
        try {
            return $query_builder->getQuery()->getSingleResult();
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
            return NULL;
        }
    }

    public function getCurrent() {
        
    }

    public function getEm() {
        return $this->em;
    }

    public function getEntity() {
        return $this->entity;
    }

    public function getDoctrine() {
        return $this->doctrine;
    }

    public function setEm($em) {
        $this->em = $em;
    }

    public function setEntity($entity) {
        $this->entity = $entity;
    }

    public function setDoctrine($doctrine) {
        $this->doctrine = $doctrine;
    }

    public function activated($pk) {
        
    }

    public function desactivated($pk) {
        
    }

}
