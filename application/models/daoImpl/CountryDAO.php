<?php

namespace daoImpl;

use dao\ICountryDAO;
use dmapimpl\DAO;
use entities\Country;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ICountryDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of CountryDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Country entity
 */
class CountryDAO extends DAO implements ICountryDAO {

    //put your code here
    public function __construct() {
        parent::__construct(Country::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . $this->entity . " e WHERE e.state !=1 "
                    . "AND e.wording = "."'". $entity->getWording() ."'"." "
                    . "AND e.shortWording = "."'". $entity->getShortWording() ."'"." "
                    . "AND e.code = "."'". $entity->getCode() ."'"." "
                    . "AND e.nationality = "."'". $entity->getNationality() ."'");
            try {
                print_r($query->getDql());
//                return $query_builder->getQuery()->getOneOrNullResult();
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
