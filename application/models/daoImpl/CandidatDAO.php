<?php

namespace daoImpl;

use dao\ICandidatDAO;
use daoImpl\PersonInfoDAO,
    daoImpl\GenderDAO,
    daoImpl\CityDAO,
    daoImpl\CountryDAO,
    daoImpl\SchoolDAO;
use dmapimpl\DAO;
use entities\Candidat;
use entities\Gender;
use entities\PersonInfo;
use entities\Country;
use entities\City;
use entities\School;
use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/ICandidatDAO.php';
require_once APPPATH . 'models/daoImpl/PersonInfoDAO.php';
require_once APPPATH . 'models/daoImpl/GenderDAO.php';
require_once APPPATH . 'models/daoImpl/CityDAO.php';
require_once APPPATH . 'models/daoImpl/CountryDAO.php';
require_once APPPATH . 'models/daoImpl/SchoolDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of CandidatDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Candidat entity
 */
class CandidatDAO extends DAO implements ICandidatDAO {

    private $genderDAO;
    private $cityDAO;
    private $countryDAO;
    private $schoolDAO;
    private $personInfoDAO;

    //put your code here
    public function __construct() {
        parent::__construct(Candidat::class);

        $this->genderDAO = new GenderDAO(Gender::class);
        $this->cityDAO = new CityDAO(City::class);
        $this->countryDAO = new CountryDAO(Country::class);
        $this->schoolDAO = new SchoolDAO(School::class);
        $this->personInfoDAO = new PersonInfoDAO(PersonInfo::class);
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
                ->where('e.state != :state')
                ->setParameter('state', 1);
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
    public function getAll() {
//        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e.id FROM " . Candidat::class . " e, "
                    . PersonInfo::class . " p, " . City::class . " ci, "
                    . "" . Country::class . " co, " . Gender::class . " g, "
                    . "". School::class . " s "
                    . "WHERE e.state !=1 "
                    . "AND e.person_info = p " . " "
                    . "AND p.birth_city = ci " . " "
                    . "AND p.nationality = co" . " "
                    . "AND p.gender = g" . " "
                    . "AND p.old_school = s");
            try {
//                print_r($query->getDql());
//                print_r($query->getOneOrNullResult());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
//        }
//        $list = new ArrayCollection();
//        $query_builder = $this->em->createQueryBuilder();
//        $query_builder->select('e')
//                ->from($this->entity, 'e')
//                ->where('e.state != :state')
//                ->orderBy('e.' . $sortProperty, "$sortAsc")
//                ->setParameter('state', 1);
//        try {
//            $list = $query_builder->getQuery()->getResult();
//        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
//        }
//        return $list;
    }

    
    /**
     * @param $sortProperty
     * @param $sortAsc
     * @return array
     */
    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
//        $list = new ArrayCollection();
        $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, ". PersonInfo::class . " p "
                . "WHERE e.state !=1 AND e.person_info = p "
                . "ORDER BY p. ". $sortProperty ." ". $sortAsc);
//        print_r($query->getSql());
        try {
            
            $list = $query->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $list;
    }
    
    /**
     * @return array
     */
    public function getAllNotValidated() {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state = :state')
                ->setParameter('state', 1);
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
    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        $query_builder = $this->em->createQueryBuilder();
        if ($sortProperty !== "") {
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->orderBy('e.' . $sortProperty, "$sortAsc")
                    ->setParameter('state', 1);
        } else {
            $query_builder->select('e')
                    ->from($this->entity, 'e')
                    ->where('e.state != :state')
                    ->setParameter('state', 1);
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
                ->where('e.state = :state')
                ->orderBy('e.' . $sortProperty, "$sortAsc")
                ->setParameter('state', 1);
        try {
            $datalist = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
        }
        return $datalist;
    }

    public function getAllForRegistration($acyId) {
        
    }

    public function getAllForRegistrationFeePayment($acyId) {
        
    }

    public function updateOneStudentById($object, $pk1, $pk2) {
        
    }

    /**
     * @return array
     */
//    public function getAllValidated() {
//        $query = $this->em->getRepository('entities\\' . $this->entity);
//        return $query->findAll();
//        $query_builder = $this->em->createQueryBuilder();
//        $query_builder->select('s')
//                ->from('entities\\Student', 's')
//                ->where('e.state != :state')
//                ->setParameter('state', 1);
//        try {
//            $datalist = $query_builder->getQuery()->getResult();
//        } catch (NoResultException $ex) {
//            echo $ex->getMessage();
//        }
//        return $datalist;
//    }

    /**
     * @param $sortProperty
     * @param $sortAsc
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
//    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
//        $datalist = new ArrayCollection();
//        $candidatTable = $this->em->getClassMetadata(Candidat::class)->getTableName();
//        $personInfoTable = $this->em->getClassMetadata(PersonInfo::class)->getTableName();
//        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
//        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
//        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
//        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('SELECT s.id AS sid,s.state AS ss,'
//                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
//                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date, '
//                . 'pi.matricule,pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,
//                pi.school_id '
//                . 'FROM ' . $candidatTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
//                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
//                . 'WHERE s.person_info_id = pi.id AND pi.gender_id = g.id '
//                . 'AND pi.city_id = ci.id AND pi.country_id = co.id '
//                . 'AND pi.school_id = sc.id AND ci.country_id = co.id AND s.state != 1 '
//                . 'ORDER BY pi.last_name,pi.first_name ASC');
//
//        while ($row = $stmt->fetch()) {
//            $gender = $this->genderDAO->getOne($row['gender_id']);
//            $birth_city = $this->cityDAO->getOne($row['city_id']);
//            $nationality = $this->countryDAO->getOne($row['country_id']);
//            $old_school = $this->schoolDAO->getOne($row['school_id']);
//            $personInfo = new PersonInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
//            $personInfo->setId($row['pid']);
//            $student = new Student($row['ss'], $row['sv'], $personInfo);
//            $student->setId($row['sid']);
//            $datalist->add($student);
//        }
//        return $datalist;
//    }
//
//    /**
//     * @param $pk
//     * @return Student
//     * @throws \Doctrine\DBAL\DBALException
//     */
//    public function getOne($pk) {
////            print_r($pk);
////        $datalist = new \Doctrine\Common\Collections\ArrayCollection();
//        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
//        $personInfoTable = $this->em->getClassMetadata(PersonInfo::class)->getTableName();
//        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
//        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
//        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
//        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('SELECT s.id AS sid,s.state AS ss,'
//                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
//                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date, '
//                . 'pi.matricule,pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,
//                pi.school_id '
//                . 'FROM ' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
//                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
//                . 'WHERE s.id = ' . $pk . ' AND s.person_info_id = pi.id AND pi.gender_id = g.id '
//                . 'AND pi.city_id = ci.id AND pi.country_id = co.id '
//                . 'AND pi.school_id = sc.id AND ci.country_id = co.id AND s.state != 1');
//
//        $row = $stmt->fetch();
//        $gender = $this->genderDAO->getOne($row['gender_id']);
//        $birth_city = $this->cityDAO->getOne($row['city_id']);
//        $nationality = $this->countryDAO->getOne($row['country_id']);
//        $old_school = $this->schoolDAO->getOne($row['school_id']);
//        $personInfo = new PersonInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
//        $personInfo->setId($row['pid']);
//        $student = new Student($row['ss'], $row['sv'], $personInfo);
//        $student->setId($row['sid']);
////            $datalist->add($student);
//        return $student;
//    }
//
//    /**
//     * @param $acyId
//     * @return ArrayCollection
//     * @throws \Doctrine\DBAL\DBALException
//     */
//    public function getAllForRegistration($acyId) {
//        $datalist = new ArrayCollection();
//        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
//        $personInfoTable = $this->em->getClassMetadata(PersonInfo::class)->getTableName();
//        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
//        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
//        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
//        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
//        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
//        $registrationTable = $this->em->getClassMetadata(Registration::class)->getTableName();
////        $academicYearTable = $this->em->getClassMetadata(\entities\AcademicYear::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('SELECT DISTINCT s.id AS sid,s.state AS ss,'
//                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
//                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date, '
//                . 'pi.matricule,pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,
//                pi.school_id '
//                . 'FROM ' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
//                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc,' . $paymentTable . ' pa '
//                . 'WHERE s.person_info_id = pi.id AND pi.gender_id = g.id '
//                . 'AND pi.city_id = ci.id AND pi.country_id = co.id AND pi.school_id = sc.id '
//                . 'AND ci.country_id = co.id AND pa.student_id = s.id AND s.id NOT IN(SELECT r.student_id FROM '
//                . $registrationTable . ' r WHERE r.academic_year_id = ' . $acyId . ')  '
//                . 'AND s.state != 1 '
//                . 'ORDER BY pi.last_name,pi.first_name ASC');
//
//        while ($row = $stmt->fetch()) {
//            $gender = $this->genderDAO->getOne($row['gender_id']);
//            $birth_city = $this->cityDAO->getOne($row['city_id']);
//            $nationality = $this->countryDAO->getOne($row['country_id']);
//            $old_school = $this->schoolDAO->getOne($row['school_id']);
//            $personInfo = new PersonInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
//            $personInfo->setId($row['pid']);
//            $student = new Student($row['ss'], $row['sv'], $personInfo);
//            $student->setId($row['sid']);
//            $datalist->add($student);
//        }
//        return $datalist;
//    }

    /**
     * @param $acyId
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
//    public function getAllForRegistrationFeePayment($acyId) {
//        $datalist = new ArrayCollection();
//        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
//        $personInfoTable = $this->em->getClassMetadata(PersonInfo::class)->getTableName();
//        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
//        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
//        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
//        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
//        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
//        $modalityPaymentTable = $this->em->getClassMetadata(ModalityPayment::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('SELECT s.id AS sid,s.state AS ss,'
//                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
//                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date, '
//                . 'pi.matricule,pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,
//                pi.country_id,pi.school_id '
//                . 'FROM ' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
//                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
//                . 'WHERE s.person_info_id = pi.id AND pi.gender_id = g.id '
//                . 'AND pi.city_id = ci.id AND pi.country_id = co.id AND pi.school_id = sc.id '
//                . 'AND ci.country_id = co.id AND s.id NOT IN('
//                . 'SELECT student_id FROM ' . $paymentTable . ' pa, ' . $modalityPaymentTable . ' m '
//                . "WHERE pa.modality_payment_id = m.id AND m.dtype = 'B' AND pa.academic_year_id = " . $acyId . ')  '
//                . 'AND s.state != 1 '
//                . 'ORDER BY pi.last_name,pi.first_name ASC');
//
//        while ($row = $stmt->fetch()) {
//            $gender = $this->genderDAO->getOne($row['gender_id']);
//            $birth_city = $this->cityDAO->getOne($row['city_id']);
//            $nationality = $this->countryDAO->getOne($row['country_id']);
//            $old_school = $this->schoolDAO->getOne($row['school_id']);
//            $personInfo = new PersonInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian/_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
//            $personInfo->setId($row['pid']);
//            $student = new Student($row['ss'], $row['sv'], $personInfo);
//            $student->setId($row['sid']);
//            $datalist->add($student);
//        }
//        return $datalist;
//    }
//
//    public function deleteStateOneById($pk) {
//        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('UPDATE ' . $studentTable . ' SET state = 1 WHERE id = ' . $pk);
//    }
//
//    public function updateOneStudentById($object, $pk1, $pk2) {
//        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
//        $personInfoTable = $this->em->getClassMetadata(PersonInfo::class)->getTableName();
//        $stmt = $this->em->getConnection()->query('UPDATE ' . $personInfoTable . " SET last_name = '" . $object[0] . "', "
//                . "first_name = '" . $object[1] . "', guardian_name = '" . $object[2] . "', guardian_mail = '" . $object[3] . "', "
//                . "guardian_phone = '" . $object[4] . "', adress = '" . $object[5] . "', birth_date = '" . $object[6] . "', "
//                . "blood_group = '" . $object[7] . "', gender_id = " . $object[8] . ', city_id = ' . $object[9] . ', '
//                . 'country_id = ' . $object[10] . ', school_id = ' . $object[11] . ', state = 2 WHERE id = ' . $pk1);
//        $stmt = $this->em->getConnection()->query('UPDATE ' . $studentTable . ' SET state = 2 WHERE id = ' . $pk2);
//    }
}
