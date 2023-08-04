<?php

namespace daoImpl;

use dao\ISemesterDAO;
use dmapimpl\DAO;
use entities\Semester,
    entities\AcademicYear;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ISemesterDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of SemesterDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Semester entity
 */
class SemesterDAO extends DAO implements ISemesterDAO {

    //put your code here
    public function __construct() {
        parent::__construct(Semester::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, " . AcademicYear::class . " c WHERE e.state !=1 "
                    . "AND e.short_wording = " . "'" . $entity->getShort_wording() . "'" . " "
                    . "AND e.medium_wording = " . "'" . $entity->getMedium_wording() . "'" . " "
                    . "AND e.long_wording = " . "'" . $entity->getLong_wording() . "'" . " "
                    . "AND e.academicyear = " . $entity->getAcademicyear()->getId());

            try {
//                return $query_builder->getQuery()->getOneOrNullResult();
//                print_r($query->getOneOrNullResult());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
