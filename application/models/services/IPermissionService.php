<?php
    
    namespace services;
    
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    
    /**
     *
     *  Description of PermissionService
     *
     * @author Xlencia
     * @The service interface of Permission entity
     */
    interface IPermissionService {
        
        //put your code here
        
        public function addPermission($permission);
        
        public function getAll();
        
        public function getAllByRoleIdWithSortAndOrder($role_id);
        
        public function getAllByRoleWithSortAndOrder($role);
    }
