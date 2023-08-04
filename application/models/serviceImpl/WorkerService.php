<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use \entities\Worker;
use services\IWorkerService,
    daoImpl\WorkerDAO,
    dmapimpl\Service;

//use \Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/services/IWorkerService.php';
require_once APPPATH . 'models/daoImpl/WorkerDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GenderServiceImpl
 *
 * @author mundhaka
 */
class WorkerService extends Service implements IWorkerService {

    private $workerDAO;

    function __construct() {
        parent::__construct(Worker::class);
        $this->workerDAO = new WorkerDAO();
    }

    public function activated($pk) {
        $this->getWorkerDAO()->activated($pk);
    }

    public function sizeOfAllValid() {
        return $this->getWorkerDAO()->sizeOfAllValid();
    }

    public function sizeOfAllNotValid() {
        return $this->getWorkerDAO()->sizeOfAllNotValid();
    }

    public function getAllValidated() {
        return $this->getWorkerDAO()->getAllValidated();
    }

    public function getAllNotValidated() {
        return $this->getWorkerDAO()->getAllNotValidated();
    }

    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->getWorkerDAO()->getAllValidatedWithSortAndOrder($sortProperty, $sortAsc);
    }

    public function getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->getWorkerDAO()->getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc);
    }

    function getWorkerDAO() {
        return $this->workerDAO;
    }

    function setWorkerDAO($workerDAO) {
        $this->workerDAO = $workerDAO;
    }

}
