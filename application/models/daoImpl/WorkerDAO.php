<?php

namespace daoImpl;

use dao\IWorkerDAO;
use daoImpl\PersonInfoDAO,
    daoImpl\GenderDAO,
    daoImpl\CityDAO,
    daoImpl\CountryDAO,
    daoImpl\SchoolDAO;
use dmapimpl\DAO;
use entities\Worker;
use entities\Gender;
use entities\ProspectInfo;
use entities\Country;
use entities\City;
use entities\School;
use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IWorkerDAO.php';
require_once APPPATH . 'models/daoImpl/PersonInfoDAO.php';
require_once APPPATH . 'models/daoImpl/GenderDAO.php';
require_once APPPATH . 'models/daoImpl/CityDAO.php';
require_once APPPATH . 'models/daoImpl/CountryDAO.php';
require_once APPPATH . 'models/daoImpl/SchoolDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 *  Description of WorkerDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Worker entity
 * Description of GenderDAO
 *
 * @author mundhaka
 */
class WorkerDAO extends DAO implements IWorkerDAO {

    private $genderDAO;
    private $cityDAO;
    private $countryDAO;
    private $schoolDAO;
    private $personInfoDAO;

    //put your code here
    public function __construct() {
        parent::__construct(Worker::class);
        $this->genderDAO = new GenderDAO(Gender::class);
        $this->cityDAO = new CityDAO(City::class);
        $this->countryDAO = new CountryDAO(Country::class);
        $this->schoolDAO = new SchoolDAO(School::class);
        $this->personInfoDAO = new PersonInfoDAO(ProspectInfo::class);
    }

    public function activated($pk){
        $current = $this->em->getRepository($this->entity)->find($pk);
        if ($current === null) {
            return FALSE;
        }
        $current->setValidated(1);
        $this->em->merge($current);
        $this->em->flush();
        return TRUE;
    }
    
    /**
     * @return int
     */
    public function sizeOfAllValid() {
        return count($this->getAllValidated());
    }

    /**
     * @return int
     */
    public function sizeOfAllNotValid() {
        return count($this->getAllNotValidated());
    }

    /**
     * @return array
     */
    public function getAllValidated() {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.validated = :validated')
                ->setParameter('validated', 1);
        try {
            $datalist = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $datalist;
    }

    /**
     * @return array
     */
    public function getAllNotValidated() {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.validated = :validated')
                ->setParameter('validated', 0);
        try {
            $datalist = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $datalist;
    }

    /**
     * @param $sortProperty
     * @param $sortAsc
     * @return array
     */
    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        $query_builder = $this->em->createQueryBuilder();
        if ($sortProperty !== "") {
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.validated != :validated')
                    ->orderBy('e.' . $sortProperty, "$sortAsc")
                    ->setParameter('validated', 1);
        } else {
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.validated != :validated')
                    ->setParameter('validated', 1);
        }
        try {
            $datalist = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
        }
        return $datalist;
    }

    /**
     * @param $sortProperty
     * @param $sortAsc
     * @return array
     */
    public function getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.validated = :validated')
                ->orderBy('e.' . $sortProperty, "$sortAsc")
                ->setParameter('validated', 1);
        try {
            $datalist = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
        }
        return $datalist;
    }

}
