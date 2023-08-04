<?php

namespace daoImpl;

use dao\ICareerDAO,
        dmapimpl\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/ICareerDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 * escription of CareerDAO
 *
 * @author Xlencia
 *@Implement the data access object's interface of Career entity
 */
class CareerDAO extends DAO implements ICareerDAO{
    //put your code here
}
