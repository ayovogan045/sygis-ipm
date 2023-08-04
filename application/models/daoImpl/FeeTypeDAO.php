<?php

namespace daoImpl;

use dao\IFeeTypeDAO,
    dmapimpl\DAO;
use entities\FeeType;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IFeeTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of FeeTypeDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of FeeType entity
 */
class FeeTypeDAO extends DAO implements IFeeTypeDAO {

    //put your code here
    public function __construct() {
        parent::__construct(FeeType::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE e.state !=1 "
                    . "AND e.wording = "."'". $entity->getWording() ."'"." "
                    . "AND e.code = "."'". $entity->getCode() ."'"." "
                    . "AND e.description = "."'". $entity->getDescription() ."'"." "
                    . "ORDER BY e.wording ASC");
//            $query_builder = $this->em->createQueryBuilder();
//            $query_builder->select('e')
//                    ->from($this->entity, 'e')
//                    ->where('e.state != :state')
//                    ->andWhere('e.wording = :wording')
//                    ->andWhere('e.code = :code')
//                    ->andWhere('e.description = :description')
//                    ->setParameter('state', 1)
//                    ->setParameter('wording', "'".$entity->getWording()."'")
//                    ->setParameter('code', "'".$entity->getCode()."'")
//                    ->setParameter('description', "'".$entity->getDescription()."'");
            try {
//                print_r($query_builder->getDql());
//                return $query_builder->getQuery()->getOneOrNullResult();
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
