<?php

namespace daoImpl;

use dao\IClassUnitFeeDAO ;
use dmapimpl\DAO,
entities\ClassUnitFee;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/IClassUnitFeeDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 *Description of ClassUnitFeeDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of ClassUniFee entity
 */
class ClassUnitFeeDAO extends DAO implements IClassUnitFeeDAO{
    //put your code here
    public function __construct() {
        parent::__construct(ClassUnitFee::class);
    }
}
