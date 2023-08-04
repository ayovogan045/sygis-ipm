<?php

namespace daoImpl;

use dao\IPersonTypeDAO,
        dmapimpl\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/IPersonTypeDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 * Description of PersonTypeDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of PersonType entity
 */
class PersonTypeDAO extends DAO implements IPersonTypeDAO{
    //put your code here
}
