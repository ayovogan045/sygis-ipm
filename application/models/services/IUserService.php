<?php

namespace services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * Description UserService
 *
 * @author Xlencia
 * @The service interface of Users entity
 */
interface IUserService {
    
    //put your code here
    
    public function getRole($user);
    
    public function getPermission($user);
    
    public function getOneByLogin($login);
}
