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
     *@Data access object's interface of Permission entity
     */
    interface IPermissionDAO {
        
        //put your code here
        
        public function addPermission($permission);
        
        public function getAllByRoleIdWithSortAndOrder($role_id);
        
        public function getAllByRoleWithSortAndOrder($role);
    }
