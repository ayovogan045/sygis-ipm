<?php

namespace daoImpl;

use dao\ITownDAO;
use dmapimpl\DAO;
use entities\Town,
    entities\Country;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ITownDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of TownDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Town entity
 */
class TownDAO extends DAO implements ITownDAO {

    //put your code here
    public function __construct() {
        parent::__construct(Town::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e, ". Country::class. " c WHERE e.state !=1 "
                    . "AND e.wording = "."'". $entity->getWording() ."'"." "
                    . "AND e.description = "."'". $entity->getDescription() ."'"." "
                    . "AND e.country= c ");
            
//            $query_builder = $this->em->createQueryBuilder();
//            $query_builder->select('e')
//                    ->from($this->entity, 'e')
////                    ->leftJoin('e.country', 'co')
//                    ->where('e.state != :state')
//                    ->andWhere('e.wording = :wording')
//                    ->andWhere('e.description = :description')
//                    ->andWhere('e.country = :country')
////                    ->andWhere('co.id = :countryId')
//                    ->setParameter('state', 1)
//                    ->setParameter('wording', "'".$entity->getWording()."'")
//                    ->setParameter('description', "'".$entity->getDescription()."'")
//                    ->setParameter('country', $entity->getCountry());
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
