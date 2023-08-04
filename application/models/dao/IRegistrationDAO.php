<?php
namespace dao;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Xlencia
 * @Data access object's interface of Registration entity
 */
interface IRegistrationDAO {
    
    public function getAllByAcademicYear($academicyear);
    
    public function getAllToClassroomByAcademicYear($academicyear);
    
    public function unregistration($pk);
    //put your code here
}
