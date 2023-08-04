<?php

namespace daoImpl;

use dao\ILevelDAO,
    dmapimpl\DAO;
use entities\Level;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ILevelDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 *  Description of LevelDAO
 *
 *@author Xlencia
 *@Implement the data access object's interface of Level entity
 */
class LevelDAO extends DAO implements ILevelDAO {
    
    //put your code here
    public function __construct() {
        parent::__construct(Level::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->andWhere('e.wording = :wording')
                    ->andWhere('e.code = :code')
                    ->setParameter('state', 1)
                    ->setParameter('wording', $entity->getWording())
                    ->setParameter('code', $entity->getCode());
            try {
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }
}
