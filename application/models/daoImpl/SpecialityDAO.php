<?php

namespace daoImpl;

use dao\ISpecialityDAO,
        dmapimpl\DAO;
use entities\Speciality,
    entities\Mention;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/ISpecialityDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 ** Description of MentionDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of Mention entity
 */
class SpecialityDAO extends DAO implements ISpecialityDAO{
    //put your code here
    //put your code here
    public function __construct() {
        parent::__construct(Speciality::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, ". Mention::class . " m WHERE e.state != 1 "
                    . "AND e.wording = " . "'" . $entity->getWording() . "'" . " "
                    . "AND e.code = " . "'" . $entity->getCode() . "'" . " "
                    . "AND e.mention = " . $entity->getMention()->getId());
            
//                print_r($query->getSql()."".$query->getDql());
            try {
//               
//                print_r($query->getOneOrNullResult());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
