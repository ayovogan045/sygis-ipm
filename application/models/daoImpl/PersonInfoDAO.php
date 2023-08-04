<?php
namespace daoImpl;

use dao\IPersonInfoDAO ;
use dmapimpl\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH .'models/dao/IPersonInfoDAO.php';
require_once APPPATH.'third_party/dmap/dmapimpl/DAO.php';
/**
 *  Description of PersonInfoDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of PersonInfo entity
 */
class PersonInfoDAO extends DAO implements IPersonInfoDAO{
    //put your code here
}
