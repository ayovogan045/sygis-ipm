<?php

namespace services;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * Description RegistrationService
 *
 * @author Xlencia
 * @The service interface of Registration entity
 */
interface IRegistrationService {
    
    public function getAllByAcademicYear($academicyear);
    
    public function getAllToClassroomByAcademicYear($academicyear);
    
    public function unregistration($pk);
    //put your code here
}