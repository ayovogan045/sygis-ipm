<?php

namespace daoImpl;

use dao\IEvaluationTypeDAO;
use dmapimpl\DAO;
use entities\EvaluationType;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IEvaluationTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of GenderDAO
 *
 * @author mundhaka
 */
class EvaluationTypeDAO extends DAO implements IEvaluationTypeDAO {

    //put your code here
    public function __construct() {
        parent::__construct(EvaluationType::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->andWhere('e.wording = :wording')
                    ->andWhere('e.code = :code')
                    ->andWhere('e.description = :description')
                    ->setParameter('state', 1)
                    ->setParameter('wording', $entity->getWording())
                    ->setParameter('code', $entity->getCode())
                    ->setParameter('description', $entity->getDescription());
            try {
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
