<?php

namespace daoImpl;

use dao\ICityDAO;
use dmapimpl\DAO;
use entities\City,
    entities\Country;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ICityDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of CityDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of City entity
 */
class CityDAO extends DAO implements ICityDAO {

    //put your code here
    public function __construct() {
        parent::__construct(City::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, ". Country::class . " c WHERE e.state !=1 "
                    . "AND e.wording = " . "'" . $entity->getWording() . "'" . " "
                    . "AND e.description = " . "'" . $entity->getDescription() . "'" . " "
                    . "AND e.country = " . $entity->getCountry()->getId());
            
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
