<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\ModalityPayment;
use services\IModalityPaymentService,
    daoImpl\ModalityPaymentDAO,
    dmapimpl\Service
;
use \Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/services/IModalityPaymentService.php';
require_once APPPATH . 'models/daoImpl/ModalityPaymentDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of ModalityPayment
 *
 * @author Xlencia
 * @Implement the service interface of ModalityPayment entity
 */
class ModalityPaymentService extends Service implements IModalityPaymentService {

    private $modalityPaymentDAO;

    public function __construct() {

        parent::__construct(ModalityPayment::class);
        $this->modalityPaymentDAO = new ModalityPaymentDAO();
    }

    public function getOneExist($entity) {
        return $this->getModalityPaymentDAO()->getOneExist($entity);
    }

    /**
     * @return ArrayCollection
     */
    public function getAllBlockPayment() {
        return $this->getModalityPaymentDAO()->getAllBlockPayment();
    }

    /**
     * @return ArrayCollection
     */
    public function getAllStepPayment() {
        return $this->getModalityPaymentDAO()->getAllStepPayment();
    }

    public function getAllFreePayment() {
        return $this->getModalityPaymentDAO()->getAllFreePayment();
    }

    public function getAllSubvention() {
        return $this->getModalityPaymentDAO()->getAllSubvention();
    }

    function getModalityPaymentDAO() {
        return $this->modalityPaymentDAO;
    }

    function setModalityPaymentDAO($modalityPaymentDAO) {
        $this->modalityPaymentDAO = $modalityPaymentDAO;
    }

}
