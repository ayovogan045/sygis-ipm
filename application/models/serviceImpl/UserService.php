<?php

namespace serviceImpl;

use entities\Users;
use services\IUserService,
    dmapimpl\Service,
    daoImpl\UserDAO;


require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';
require_once APPPATH . 'models/services/IUserService.php';
require_once APPPATH . 'models/daoImpl/UserDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Users entity
 */
class UserService extends Service implements IUserService {
    
    private $usersDAO;
    
    public function __construct() {
        
        parent::__construct(Users::class);
        $this->userDAO = new UserDAO();
    }
    
    public function getOne($object) {
        
        return $this->usersDAO->getOne($object);
    }
    
    public function getOneByLogin($login) {
        
        return $this->usersDAO->getOneByLogin($login);
    }
    
    public function saveAll($objects) {
        
        return $this->usersDAO->saveAll($objects);
    }
    
    public function saveOne($object) {
        
        return $this->usersDAO->saveOne($object);
    }
    
    public function getUsersDAO() {
        
        return $this->usersDAO;
    }
    
    public function setUsersDAO($usersDAO) {
        
        $this->usersDAO = $usersDAO;
    }
    
    public function getRole($user) {
        // TODO: Implement getRole() method.
    }
    
    public function getPermission($user) {
        // TODO: Implement getPermission() method.
    }
}
