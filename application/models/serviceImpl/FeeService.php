<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Fee;
use services\IFeeService,
    daoImpl\FeeDAO,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IFeeService.php';
require_once APPPATH . 'models/daoImpl/FeeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of FeeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Fee entity
 */
class FeeService extends Service implements IFeeService {

    private $feeDAO;

    public function __construct() {
        parent::__construct(Fee::class);
        $this->feeDAO = new FeeDAO();
    }

    public function getOneExist($entity) {
        return $this->getFeeDAO()->getOneExist($entity);
    }
    
    public function getFeeDAO() {
        return $this->feeDAO;
    }

    public function setFeeDAO($feeDAO) {
        $this->feeDAO = $feeDAO;
    }

}
