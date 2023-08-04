<?php

namespace daoImpl;

use dao\IPersonDAO,
        dmapimpl\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/IPersonDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 * Description of PersonDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Person entity
 */
class PersonDAO extends DAO implements IPersonDAO{
    //put your code here
}
