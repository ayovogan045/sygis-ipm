<?php

namespace daoImpl;

use dao\IInscriptionDAO,
    dmapimpl\DAO;
use entities\Registration;
use entities\Inscription;

use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IInscriptionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of AcademicYearDAO
 *
 * @author mundhaka
 */
class InscriptionDAO extends DAO implements IInscriptionDAO {

    protected $list;

    public function __construct() {
        parent::__construct(Inscription::class);

    }

    public function getAllByAcademicYear($academicyear) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state != :state')
                ->AndWhere('e.academicyear = :academicyear')
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
    
    public function getAllToRegistrationByAcademicYear($academicyear) {
//        sSQL = "select * from t_clients LEFT JOIN t_prods ON t_clients.v_client_id = t_prods.v_client_id"
//        where('u.id NOT IN (SELECT u2.id FROM User u2 INNER JOIN u2.Groups g)');
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, ' e')
                ->leftJoin('e.candidat','c')
                ->Where('c.id NOT IN (select c2.id FROM entities\Registration r INNER JOIN r.candidat c2)')
                ->andwhere('e.state != :state')
                ->andWhere('e.academicyear = :academicyear')
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

    public function abandonOne($pk) {
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $this->em->getConnection()->query('UPDATE ' . $paymentTable . ' SET state = -1 WHERE id = ' . $pk);
    }

    public function restoreOne($pk) {
        $paymentTable = $this->em->getClassMetadata(Payment::class)->getTableName();
        $this->em->getConnection()->query('UPDATE ' . $paymentTable . ' SET state = -2 WHERE id = ' . $pk);
    }

    /**
     * @param $first_date
     * @param $snd_date
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllForPrint($academicyear, $startdate, $enddate) {
        if ($startdate != "" && $enddate != "") {
            return $this->getAllForPrintByTwinceDate($academicyear, $startdate, $enddate);
        } elseif ($startdate != "" && $enddate == "") {
            return $this->getAllForPrintByStartDate($academicyear, $startdate);
        } elseif ($startdate != "" && $enddate == "") {
            return $this->getAllForPrintByEndDate($academicyear, $enddate);
        } else {
            return $this->getAllForPrintByNoDate($academicyear);
        }
    }
    
    public function getReceiptNumber() {
        $stmt = $this->em->getConnection()->query('SELECT number FROM receipts');
        $row = $stmt->fetch();
        $count = $row['number'];
        $this->em->getConnection()->query('UPDATE receipts SET number = ' . ($count + 1));
        return $count;
    }

    private function getAllForPrintByStartDate($academicyear, $startdate) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state = :state')
                ->AndWhere('e.academicyear = :academicyear')
                ->AndWhere('e.payment_date >= :startdate')
                ->orderBy('e.candidat', "ASC")
                ->setParameter('state', 0)
                ->setParameter('academicyear', $academicyear)
                ->setParameter('startdate', $startdate);
        try {
            $this->list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }

    private function getAllForPrintByEndDate($academicyear, $enddate) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state = :state')
                ->AndWhere('e.academicyear = :academicyear')
                ->AndWhere('e.payment_date <= :enddate')
                ->orderBy('e.candidat', "ASC")
                ->setParameter('state', 0)
                ->setParameter('academicyear', $academicyear)
                ->setParameter('enddate', $enddate);
        try {
            $this->list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }

    private function getAllForPrintByTwinceDate($academicyear, $startdate, $enddate) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state = :state')
                ->AndWhere('e.academicyear = :academicyear')
                ->AndWhere('e.payment_date BETWEEN :startdate AND :enddate')
                ->orderBy('e.candidat', "ASC")
                ->setParameter('state', 0)
                ->setParameter('academicyear', $academicyear)
                ->setParameter('startdate', $startdate)
                ->setParameter('enddate', $enddate);
        try {
            $this->list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }

    private function getAllForPrintByNoDate($academicyear) {
        $query_builder = $this->em->createQueryBuilder();
        $query_builder->select('e')
                ->from($this->entity, 'e')
                ->where('e.state = :state')
                ->AndWhere('e.academicyear = :academicyear')
                ->orderBy('e.candidat', "ASC")
                ->setParameter('state', 0)
                ->setParameter('academicyear', $academicyear);
        try {
            $this->list = $query_builder->getQuery()->getResult();
        } catch (NoResultException $ex) {
            echo $ex->getMessage();
        }
        return $this->list;
    }

//put your code here
}
