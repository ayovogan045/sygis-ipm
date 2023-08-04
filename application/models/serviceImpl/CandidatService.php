<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Candidat;
use services\ICandidatService,
    daoImpl\CandidatDAO,
    dmapimpl\Service;

//use \Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/entities/School.php';

require_once APPPATH . 'models/services/ICandidatService.php';
require_once APPPATH . 'models/daoImpl/CandidatDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of CandidatServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Candidat entity
 */
class CandidatService extends Service implements ICandidatService {

    private $candidatDAO;

    function __construct() {
        parent::__construct(Candidat::class);
        
        $this->candidatDAO = new CandidatDAO();
    }

    public function sizeOfAllValid() {
        return $this->getCandidatDAO()->sizeOfAllValid();
    }

    public function sizeOfAllNotValid() {
        return $this->getCandidatDAO()->sizeOfAllNotValid();
    }

    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->candidatDAO->getAllWithSortAndOrder($sortProperty, $sortAsc);
    }
    
    public function getAllValidated() {
        return $this->getCandidatDAO()->getAllValidated();
    }

    public function getAllNotValidated() {
        return $this->getCandidatDAO()->getAllNotValidated();
    }

    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->getCandidatDAO()->getAllValidatedWithSortAndOrder($sortProperty, $sortAsc);
    }

    public function getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->getCandidatDAO()->getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc);
    }

    public function getAllForRegistration($acyId) {
        return $this->getCandidatDAO()->getAllForRegistration($acyId);
    }

    public function getAllForRegistrationFeePayment($acyId) {
        return $this->getCandidatDAO()->getAllForRegistrationFeePayment($acyId);
    }

    public function deleteStateOneById($pk) {
        return $this->getCandidatDAO()->deleteStateOneById($pk);
    }

    public function updateOneStudentById($object, $pk1, $pk2) {
        return $this->getCandidatDAO()->updateOneStudentById($object, $pk1, $pk2);
    }

    function getCandidatDAO() {
        return $this->candidatDAO;
    }

    function setCandidatDAO($candidatDAO) {
        $this->candidatDAO = $candidatDAO;
    }

}
