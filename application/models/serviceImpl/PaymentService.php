<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Payment;
use services\IPaymentService,
    daoImpl\PaymentDAO,
    dmapimpl\Service

;

require_once APPPATH . 'models/services/IPaymentService.php';
require_once APPPATH . 'models/daoImpl/PaymentDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of PaymentServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Payment entity
 */
class PaymentService extends Service implements IPaymentService {

    private $paymentDAO;

    function __construct() {
        parent::__construct(Payment::class);
        $this->paymentDAO = new PaymentDAO();
    }

    public function saveOne($object) {
        $this->getPaymentDAO()->saveOne($object);
    }

    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->getPaymentDAO()->getAllValidatedWithSortAndOrder($sortProperty, $sortAsc);
    }

    /**
     * @param $student_id
     * @param $acyear_id
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAllSchoolFeesByStudent($student_id, $acyear_id) {
        return $this->getPaymentDAO()->getAllSchoolFeesByStudent($student_id, $acyear_id);
    }

    public function getOne($pk) {
        return $this->getPaymentDAO()->getOne($pk);
    }

    public function abandonOne($pk) {
        return $this->getPaymentDAO()->abandonOne($pk);
    }

    public function restoreOne($pk) {
        return $this->getPaymentDAO()->restoreOne($pk);
    }

    public function getAllForPrint($first_date, $snd_date) {
        $all_payment = $this->getPaymentDAO()->getAllForPrint($first_date, $snd_date);
        $print_list = new \Doctrine\Common\Collections\ArrayCollection();
        if ($first_date != "" && $snd_date != "") {
            foreach ($all_payment as $payment) {
                $date = substr($payment->getPayment_date(), 0, 10);
                if (strcmp($first_date, $date) <= 0 && strcmp($snd_date, $date) >= 0) {
                    $print_list->add($payment);
                }
            }
            return $print_list;
        }
        if ($first_date != "" && $snd_date == "") {
            foreach ($all_payment as $payment) {
                $date = substr($payment->getPayment_date(), 0, 10);
                if (strcmp($first_date, $date) <= 0) {
                    $print_list->add($payment);
                }
            }
            return $print_list;
        }
        if ($first_date == "" && $snd_date != "") {
            foreach ($all_payment as $payment) {
                $date = substr($payment->getPayment_date(), 0, 10);
                if (strcmp($snd_date, $date) >= 0) {
                    $print_list->add($payment);
                }
            }
            return $print_list;
        }
        return $all_payment;
    }

    public function getReceiptNumber() {
        return $this->getPaymentDAO()->getReceiptNumber();
    }

    function getPaymentDAO() {
        return $this->paymentDAO;
    }

    function setPaymentDAO($paymentDAO) {
        $this->paymentDAO = $paymentDAO;
    }

}
