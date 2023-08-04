<?php

namespace daoImpl;

use dao\IStaffDAO;
use dmapimpl\DAO;
//use \Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\ORM\NoResultException;
use entities\Staff;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IStaffDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 *Description of StaffDAO
 *
 *@author Xlencia
 *@Implement the data access object's interface of Staff entity
 */
class StaffDAO extends DAO implements IStaffDAO {

    //put your code here
    public function __construct() {
        
        parent::__construct(Staff::class);
    }

}
