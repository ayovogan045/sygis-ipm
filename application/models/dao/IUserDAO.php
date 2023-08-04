<?php

namespace dao;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 *@author Xlencia
 *@Data access object's interface of Users entity
 */
interface IUserDAO {
    
    public function getRole($user);
    
    public function getPermission($user);
    
    public function getOneByLogin($login);
}
