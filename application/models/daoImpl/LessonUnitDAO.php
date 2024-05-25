<?php

namespace daoImpl;

use dao\ILessonUnitDAO,
    dmapimpl\DAO;
use entities\LessonUnit;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ILessonUnitDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of LessonUnitDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of LessonUnit entity
 */
class LessonUnitDAO extends DAO implements ILessonUnitDAO {

//put your code here
    public function __construct() {
        parent::__construct(LessonUnit::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e WHERE e.state !=1 "
                    . "AND e.codeue = " . "'" . $entity->getCodeue() . "' "
                    . "AND e.long_wording = " . "'" . $entity->getLong_wording() . "' "
                    . "AND e.medium_wording = " . "'" . $entity->getMedium_wording() . "' "
                    . "AND e.lesson_unit_type = " . "'" . $entity->getLesson_unit_type() . "' "
                    . "AND e.speciality = " . "'" . $entity->getSpeciality() . "' ");
            try {              
//                print_r($query->getOneOrNullResult());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
