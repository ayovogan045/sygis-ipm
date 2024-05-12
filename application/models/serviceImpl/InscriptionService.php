<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Inscription;
use services\IInscriptionService,
    daoImpl\InscriptionDAO,
    dmapimpl\Service

;

require_once APPPATH . 'models/services/IInscriptionService.php';
require_once APPPATH . 'models/daoImpl/InscriptionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of AcademicYear
 *
 * @author mundhaka
 */
class InscriptionService extends Service implements IInscriptionService {

    private $inscriptionDAO;

    function __construct() {
        parent::__construct(Inscription::class);
        $this->inscriptionDAO = new InscriptionDAO();
    }
    
    public function getAllByAcademicYear($academicyear) {
        return $this->getInscriptionDAO()->getAllByAcademicYear($academicyear);
    }
    
    public function getAllToRegistration() {
        return $this->getInscriptionDAO()->getAllToRegistration();
    }
    
    public function getAllForPrint($academicyear, $start_date, $end_date) {
        return $this->getInscriptionDAO()->getAllForPrint($academicyear, $start_date, $end_date);
    }
    
    public function getReceiptNumber(){
        return $this->getInscriptionDAO()->getReceiptNumber();
    }

    function getInscriptionDAO() {
        return $this->inscriptionDAO;
    }

    function seInscriptionDAO($inscriptionDAO) {
        $this->inscriptionDAO = $inscriptionDAO;
    }


}
