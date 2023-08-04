<?php

namespace daoImpl;

use dao\ISessionDAO,
        dmapimpl\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/ISessionDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 *  Description of SessionDAO
 *
 *@author Xlencia
 *@Implement the data access object's interface of Session entity
 */
class SessionDAO extends DAO implements ISessionDAO{
    //put your code here
}
