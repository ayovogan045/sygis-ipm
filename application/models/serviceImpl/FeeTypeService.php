<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\FeeType;
use services\IFeeTypeService,
    dmapimpl\Service,
    daoImpl\FeeTypeDAO;

require_once APPPATH . 'models/services/IFeeTypeService.php';
require_once APPPATH . 'models/daoImpl/FeeTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of FeeTypeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of FeeType entity
 */
class FeeTypeService extends Service implements IFeeTypeService {

    private $feeTypeDAO;

    public function __construct() {
        parent::__construct(FeeType::class);
        $this->feeTypeDAO = new FeeTypeDAO();
    }

    public function getOneExist($entity) {
        return $this->getFeeTypeDAO()->getOneExist($entity);
    }

    function getFeeTypeDAO() {
        return $this->feeTypeDAO;
    }

    function setFeeTypeDAO($feeTypeDAO) {
        $this->feeTypeDAO = $feeTypeDAO;
    }

}
