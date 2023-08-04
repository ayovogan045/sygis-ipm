<?php

namespace daoImpl;

use dao\IClassroomDAO,
    dmapimpl\DAO,
    entities\Classroom;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IClassroomDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of ClassroomDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Classes entity
 */
class ClassroomDAO extends DAO implements IClassroomDAO {

    //put your code here
    public function __construct() {
        parent::__construct(Classroom::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query_builder = $this->em->createQueryBuilder();
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->andWhere('e.classunit = :classunit')
                    ->andWhere('e.group = :group')
                    ->setParameter('state', 1)
                    ->setParameter('classunit', $entity->getClassunit())
                    ->setParameter('group', $entity->getGroup());
            try {
                return $query_builder->getQuery()->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
