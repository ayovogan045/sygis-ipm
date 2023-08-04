<?php

namespace daoImpl;

use dao\IGroupDAO ;
use dmapimpl\DAO;
use entities\Category;
use Doctrine\Common\Collections\ArrayCollection;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/IGroupDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 * Description of GenderDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of Group entity
 */
class GroupDAO extends DAO implements IGroupDAO{
    
    //put your code here
    public function __construct() {
        parent::__construct(Category::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->andWhere('e.wording = :wording')
                    ->setParameter('state', 1)
                    ->setParameter('wording', $entity->getWording());
            try {
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }
  /**
     * @param $sortProperty
     * @param $sortAsc
     * @return array
     */
//    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
//        $list = new ArrayCollection();
//        $query = $this->em->createQuery('SELECT e FROM ' . $this->entity . ' e '
//                . 'WHERE e.state != 1 '
//                . 'ORDER BY e.' . $sortProperty . ' ' . $sortAsc);
//        print_r($query->getSql());
//        try {
//            $list = $query->getResult();
//        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
//        }
//        return $list;
//    }
}
