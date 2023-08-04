<?php

namespace services;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * Description IRegistrationClassroomService
 *
 * @author Xlencia
 * @The service interface of RegistrationClassroom entity
 */
interface IRegistrationClassroomService {
    
    public function getAllByYear($acyearId);
    
    public function unregistration($pk);
    //put your code here
}