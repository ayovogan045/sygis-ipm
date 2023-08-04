<?php

namespace daoImpl;

use dao\IRegistrationDAO,
    dmapimpl\DAO;
use daoImpl\PersonInfoDAO,
    daoImpl\GenderDAO,
    daoImpl\CityDAO,
    daoImpl\CountryDAO,
    daoImpl\FeeDAO,
    daoImpl\ModalityPaymentDAO,
    daoImpl\AcademicYearDAO,
    daoImpl\SchoolDAO;
use Doctrine\Common\Collections\ArrayCollection;
use entities\AcademicYear;
use entities\City;
use entities\Country;
use entities\Gender;
use entities\ProspectInfo;
use entities\Registration;
use entities\School;
use entities\Student;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IRegistrationDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';
require_once APPPATH . 'models/daoImpl/PersonInfoDAO.php';
require_once APPPATH . 'models/daoImpl/GenderDAO.php';
require_once APPPATH . 'models/daoImpl/CityDAO.php';
require_once APPPATH . 'models/daoImpl/CountryDAO.php';
require_once APPPATH . 'models/daoImpl/FeeDAO.php';
require_once APPPATH . 'models/daoImpl/ModalityPaymentDAO.php';
require_once APPPATH . 'models/daoImpl/AcademicYearDAO.php';
require_once APPPATH . 'models/daoImpl/SchoolDAO.php';

/**
 * Description of RegistrationDAO
 *
 * @@author Xlencia
 * @Implement the data access object's interface of Registration entity
 */
class RegistrationDAO extends DAO implements IRegistrationDAO {

    public function __construct() {
        parent::__construct(Registration::class);
    }

    /**
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllByAcademicYear($academicyear) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->AndWhere('e.academic_year = :academicyear')
                ->orderBy('e.candidat', "ASC")
                ->setParameter('state', 1)
                ->setParameter('academicyear', $academicyear);
        try {
            $this->list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }

    public function getAllToClassroomByAcademicYear($academicyear) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, ' e')
                ->Where('e.id NOT IN (select r.id FROM entities\RegistrationClassroom rcl INNER JOIN rcl.registration r)')
                ->andwhere('e.state != :state')
                ->andWhere('e.academic_year = :academicyear')
                ->orderBy('e.candidat', "ASC")
                ->setParameter('state', 1)
                ->setParameter('academicyear', $academicyear);
        try {
            $this->list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }

    public function unregistration($pk) {
        $registrationTable = $this->em->getClassMetadata(Registration::class)->getTableName();
        $stmt = $this->em->getConnection()->query('DELETE FROM ' . $registrationTable . ' WHERE id = ' . $pk);
    }

//put your code here
}
