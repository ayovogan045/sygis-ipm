<?php

namespace daoImpl;

use dao\IPaymentDAO,
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
use entities\Fee;
use entities\Gender;
use entities\ModalityPayment;
use entities\Payment;
use entities\ProspectInfo;
use entities\School;
use entities\Student;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IPaymentDAO.php';
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
 *  Description of PaymentDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of Payment entity
 */
class PaymentDAO extends DAO implements IPaymentDAO {

    private $genderDAO;
    private $cityDAO;
    private $countryDAO;
    private $schoolDAO;
    private $personInfoDAO;
    private $feeDAO;
    private $modalityPaymentDAO;
    private $academicYearDAO;

    public function __construct() {
        parent::__construct('Payment');

        $this->genderDAO = new GenderDAO('Gender');
        $this->cityDAO = new CityDAO('City');
        $this->countryDAO = new CountryDAO('Country');
        $this->schoolDAO = new SchoolDAO('School');
        $this->personInfoDAO = new PersonInfoDAO('PersonInfo');
        $this->feeDAO = new FeeDAO('Fee');
        $this->modalityPaymentDAO = new ModalityPaymentDAO('ModalityPayment');
        $this->academicYearDAO = new AcademicYearDAO('AcademicYear');
    }

    public function saveOne($object) {
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $this->em->getConnection()->query('INSERT INTO ' . $paymentTable .
            '(student_id,fee_id,modality_payment_id,academic_year_id,amount_paid,rest_to_paid,payment_date,state) '
                . 'VALUES(' . $object[0] . ',' . $object[1] . ',' . $object[2] . ',' . $object[3] . ',' . $object[4] . ',' . $object[5] . ",'" . $object[6] . "'," . $object[7] . ')');
//        $stmt->execute();
    }

    public function abandonOne($pk) {
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $this->em->getConnection()->query('UPDATE ' . $paymentTable . ' SET state = -1 WHERE id = ' . $pk);
    }

    public function restoreOne($pk) {
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $this->em->getConnection()->query('UPDATE ' . $paymentTable . ' SET state = -2 WHERE id = ' . $pk);
    }
    
    /**
     * @param $sortProperty
     * @param $sortAsc
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        $datalist = new ArrayCollection();
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $feeTable = $this->em->getClassMetadata(Fee::class)->getTableName();
        $modalityPaymentTable = $this->em->getClassMetadata(ModalityPayment::class)->getTableName();
        $AcademicYearTable = $this->em->getClassMetadata(AcademicYear::class)->getTableName();
        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
        $personInfoTable = $this->em->getClassMetadata(ProspectInfo::class)->getTableName();
        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
        $stmt = $this->em->getConnection()->query('SELECT pa.id AS paid,pa.amount_paid,pa.rest_to_paid,pa.payment_date,'
                . 'pa.state AS pas,pa.fee_id,pa.modality_payment_id,pa.academic_year_id,s.id AS sid,s.state AS ss,'
                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date,pi.matricule,'
                . 'pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,pi.school_id '
                . 'FROM ' . $paymentTable . ' pa,' . $feeTable . ' f,' . $modalityPaymentTable . ' mp,' . $AcademicYearTable . ' a,' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
                . 'WHERE pa.student_id=s.id AND pa.fee_id=f.id AND pa.modality_payment_id=mp.id AND pa.academic_year_id=a.id AND s.person_info_id = pi.id AND pi.gender_id = g.id '
                . 'AND pi.city_id = ci.id AND pi.country_id = co.id '
                . 'AND pi.school_id = sc.id AND ci.country_id = co.id AND s.state != 1 '
                . 'ORDER BY pi.last_name,pi.first_name ASC');

        while ($row = $stmt->fetch()) {
            $gender = $this->genderDAO->getOne($row['gender_id']);
            $birth_city = $this->cityDAO->getOne($row['city_id']);
            $nationality = $this->countryDAO->getOne($row['country_id']);
            $old_school = $this->schoolDAO->getOne($row['school_id']);
            $personInfo = new ProspectInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
            $personInfo->setId($row['pid']);
            $student = new Student($row['ss'], $row['sv'], $personInfo);
            $student->setId($row['sid']);
            $fee = $this->feeDAO->getOne($row['fee_id']);
            $modality_payment = $this->modalityPaymentDAO->getOne($row['modality_payment_id']);
            $academic_year = $this->academicYearDAO->getOne($row['academic_year_id']);
            $payment = new Payment($row['amount_paid'], $row['rest_to_paid'], $row['payment_date'], $row['pas'], $student, $fee, $modality_payment, $academic_year);
            $payment->setId($row['paid']);
            $datalist->add($payment);
        }
        return $datalist;
    }
    
    /**
     * @param $first_date
     * @param $snd_date
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllForPrint($first_date, $snd_date) {
        $datalist = new ArrayCollection();
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $feeTable = $this->em->getClassMetadata(Fee::class)->getTableName();
        $modalityPaymentTable = $this->em->getClassMetadata(ModalityPayment::class)->getTableName();
        $AcademicYearTable = $this->em->getClassMetadata(AcademicYear::class)->getTableName();
        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
        $personInfoTable = $this->em->getClassMetadata(ProspectInfo::class)->getTableName();
        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
        $stmt = $this->em->getConnection()->query('SELECT pa.id AS paid,pa.amount_paid,pa.rest_to_paid,pa.payment_date,'
                . 'pa.state AS pas,pa.fee_id,pa.modality_payment_id,pa.academic_year_id,s.id AS sid,s.state AS ss,'
                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date,pi.matricule,'
                . 'pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,pi.school_id '
                . 'FROM ' . $paymentTable . ' pa,' . $feeTable . ' f,' . $modalityPaymentTable . ' mp,' . $AcademicYearTable . ' a,' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
                . 'WHERE pa.student_id=s.id AND pa.fee_id=f.id AND pa.modality_payment_id=mp.id AND pa.academic_year_id=a.id AND s.person_info_id = pi.id AND pi.gender_id = g.id '
                . 'AND pi.city_id = ci.id AND pi.country_id = co.id '
                . 'AND pi.school_id = sc.id AND ci.country_id = co.id AND s.state != 1 '
                . 'ORDER BY pi.last_name,pi.first_name ASC');

        while ($row = $stmt->fetch()) {
            $gender = $this->genderDAO->getOne($row['gender_id']);
            $birth_city = $this->cityDAO->getOne($row['city_id']);
            $nationality = $this->countryDAO->getOne($row['country_id']);
            $old_school = $this->schoolDAO->getOne($row['school_id']);
            $personInfo = new ProspectInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
            $personInfo->setId($row['pid']);
            $student = new Student($row['ss'], $row['sv'], $personInfo);
            $student->setId($row['sid']);
            $fee = $this->feeDAO->getOne($row['fee_id']);
            $modality_payment = $this->modalityPaymentDAO->getOne($row['modality_payment_id']);
            $academic_year = $this->academicYearDAO->getOne($row['academic_year_id']);
            $payment = new Payment($row['amount_paid'], $row['rest_to_paid'], $row['payment_date'], $row['pas'], $student, $fee, $modality_payment, $academic_year);
            $payment->setId($row['paid']);
            $datalist->add($payment);
        }
        return $datalist;
    }
    
    /**
     * @param $student_id
     * @param $acyear_id
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllSchoolFeesByStudent($student_id, $acyear_id) {
        $datalist = new ArrayCollection();
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $feeTable = $this->em->getClassMetadata(Fee::class)->getTableName();
        $modalityPaymentTable = $this->em->getClassMetadata(ModalityPayment::class)->getTableName();
        $AcademicYearTable = $this->em->getClassMetadata(AcademicYear::class)->getTableName();
        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
        $personInfoTable = $this->em->getClassMetadata(ProspectInfo::class)->getTableName();
        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
        $stmt = $this->em->getConnection()->query('SELECT pa.id AS paid,pa.amount_paid,pa.rest_to_paid,pa.payment_date,'
                . 'pa.state AS pas,pa.fee_id,pa.modality_payment_id,pa.academic_year_id,s.id AS sid,s.state AS ss,'
                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date,pi.matricule,'
                . 'pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,pi.school_id '
                . 'FROM ' . $paymentTable . ' pa,' . $feeTable . ' f,' . $modalityPaymentTable . ' mp,' . $AcademicYearTable . ' a,' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
                . 'WHERE pa.student_id=s.id AND pa.fee_id=f.id AND pa.modality_payment_id=mp.id AND pa.academic_year_id=a.id AND s.person_info_id = pi.id AND pi.gender_id = g.id '
                . 'AND pi.city_id = ci.id AND pi.country_id = co.id AND s.id=' . $student_id . " AND mp.dtype = 'S' AND a.id= " . $acyear_id . ' '
                . 'AND pi.school_id = sc.id AND ci.country_id = co.id AND s.state != 1 '
                . 'ORDER BY pi.last_name,pi.first_name ASC');

        while ($row = $stmt->fetch()) {
            $gender = $this->genderDAO->getOne($row['gender_id']);
            $birth_city = $this->cityDAO->getOne($row['city_id']);
            $nationality = $this->countryDAO->getOne($row['country_id']);
            $old_school = $this->schoolDAO->getOne($row['school_id']);
            $personInfo = new ProspectInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
            $personInfo->setId($row['pid']);
            $student = new Student($row['ss'], $row['sv'], $personInfo);
            $student->setId($row['sid']);
            $fee = $this->feeDAO->getOne($row['fee_id']);
            $modality_payment = $this->modalityPaymentDAO->getOne($row['modality_payment_id']);
            $academic_year = $this->academicYearDAO->getOne($row['academic_year_id']);
            $payment = new Payment($row['amount_paid'], $row['rest_to_paid'], $row['payment_date'], $row['pas'], $student, $fee, $modality_payment, $academic_year);
            $payment->setId($row['paid']);
            $datalist->add($payment);
        }
        return $datalist;
    }
    
    /**
     * @param $student_id
     * @param $acyear_id
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllRegistrationFeeByStudent($student_id, $acyear_id) {
        $datalist = new ArrayCollection();
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $feeTable = $this->em->getClassMetadata(Fee::class)->getTableName();
        $modalityPaymentTable = $this->em->getClassMetadata(ModalityPayment::class)->getTableName();
        $AcademicYearTable = $this->em->getClassMetadata(AcademicYear::class)->getTableName();
        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
        $personInfoTable = $this->em->getClassMetadata(ProspectInfo::class)->getTableName();
        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
        $stmt = $this->em->getConnection()->query('SELECT pa.id AS paid,pa.amount_paid,pa.rest_to_paid,pa.payment_date,'
                . 'pa.state AS pas,pa.fee_id,pa.modality_payment_id,pa.academic_year_id,s.id AS sid,s.state AS ss,'
                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date,pi.matricule,'
                . 'pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,pi.school_id '
                . 'FROM ' . $paymentTable . ' pa,' . $feeTable . ' f,' . $modalityPaymentTable . ' mp,' . $AcademicYearTable . ' a,' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
                . 'WHERE pa.student_id=s.id AND pa.fee_id=f.id AND pa.modality_payment_id=mp.id AND pa.academic_year_id=a.id AND s.person_info_id = pi.id AND pi.gender_id = g.id '
                . "AND pi.city_id = ci.id AND pi.country_id = co.id AND mp.dtype = 'B' "
                . 'AND pi.school_id = sc.id AND ci.country_id = co.id AND s.state != 1 '
                . 'ORDER BY pi.last_name,pi.first_name ASC');

        while ($row = $stmt->fetch()) {
            $gender = $this->genderDAO->getOne($row['gender_id']);
            $birth_city = $this->cityDAO->getOne($row['city_id']);
            $nationality = $this->countryDAO->getOne($row['country_id']);
            $old_school = $this->schoolDAO->getOne($row['school_id']);
            $personInfo = new ProspectInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
            $personInfo->setId($row['pid']);
            $student = new Student($row['ss'], $row['sv'], $personInfo);
            $student->setId($row['sid']);
            $fee = $this->feeDAO->getOne($row['fee_id']);
            $modality_payment = $this->modalityPaymentDAO->getOne($row['modality_payment_id']);
            $academic_year = $this->academicYearDAO->getOne($row['academic_year_id']);
            $payment = new Payment($row['amount_paid'], $row['rest_to_paid'], $row['payment_date'], $row['pas'], $student, $fee, $modality_payment, $academic_year);
            $payment->setId($row['paid']);
            $datalist->add($payment);
        }
        return $datalist;
    }
    
    /**
     * @param $pk
     * @return Payment
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getOne($pk) {
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $feeTable = $this->em->getClassMetadata(Fee::class)->getTableName();
        $modalityPaymentTable = $this->em->getClassMetadata(ModalityPayment::class)->getTableName();
        $studentTable = $this->em->getClassMetadata(Student::class)->getTableName();
        $personInfoTable = $this->em->getClassMetadata(ProspectInfo::class)->getTableName();
        $genderTable = $this->em->getClassMetadata(Gender::class)->getTableName();
        $cityTable = $this->em->getClassMetadata(City::class)->getTableName();
        $countryTable = $this->em->getClassMetadata(Country::class)->getTableName();
        $schoolTable = $this->em->getClassMetadata(School::class)->getTableName();
        $stmt = $this->em->getConnection()->query('SELECT pa.id AS paid,pa.amount_paid, pa.rest_to_paid,pa.payment_date,'
                . 'pa.state AS pas,pa.fee_id,pa.modality_payment_id,pa.academic_year_id,s.id AS sid,s.state AS ss,'
                . 's.validated AS sv,pi.id AS pid,pi.last_name,pi.first_name,pi.guardian_name,'
                . 'pi.guardian_phone,pi.guardian_mail,pi.adress,pi.birth_date,pi.matricule,'
                . 'pi.blood_group,pi.picture,pi.create_date,pi.gender_id,pi.city_id,pi.country_id,pi.school_id '
                . 'FROM ' . $paymentTable . ' pa,' . $feeTable . ' f,' . $modalityPaymentTable . ' mp,' . $studentTable . ' s,' . $personInfoTable . ' pi,' . $genderTable . ' g,'
                . $cityTable . ' ci,' . $countryTable . ' co,' . $schoolTable . ' sc '
                . 'WHERE pa.student_id=s.id AND pa.fee_id=f.id AND pa.modality_payment_id=mp.id AND s.person_info_id = pi.id AND pi.gender_id = g.id '
                . 'AND pi.city_id = ci.id AND pi.country_id = co.id AND pi.school_id = sc.id '
                . 'AND ci.country_id = co.id AND s.state != 1 AND pa.id = ' . $pk);

        $row = $stmt->fetch();
        $gender = $this->genderDAO->getOne($row['gender_id']);
        $birth_city = $this->cityDAO->getOne($row['city_id']);
        $nationality = $this->countryDAO->getOne($row['country_id']);
        $old_school = $this->schoolDAO->getOne($row['school_id']);
        $personInfo = new ProspectInfo($row['last_name'], $row['first_name'], $row['guardian_name'], $row['guardian_mail'], $row['guardian_phone'], $row['adress'], $row['birth_date'], $row['matricule'], $row['blood_group'], $row['picture'], $row['create_date'], $gender, $birth_city, $nationality, $old_school);
        $personInfo->setId($row['pid']);
        $student = new Student($row['ss'], $row['sv'], $personInfo);
        $student->setId($row['sid']);
        $fee = $this->feeDAO->getOne($row['fee_id']);
        $modality_payment = $this->modalityPaymentDAO->getOne($row['modality_payment_id']);
        $academic_year = $this->academicYearDAO->getOne($row['academic_year_id']);
        $payment = new Payment($row['amount_paid'], $row['rest_to_paid'], $row['payment_date'], $row['pas'], $student, $fee, $modality_payment, $academic_year);
        $payment->setId($row['paid']);

        return $payment;
    }

    public function getReceiptNumber() {
        $stmt = $this->em->getConnection()->query('SELECT number FROM receipts');
        $row = $stmt->fetch();
        $count = $row['number'];
        $this->em->getConnection()->query('UPDATE receipts SET number = ' . ($count + 1));
        return $count;
    }

//put your code here
}
