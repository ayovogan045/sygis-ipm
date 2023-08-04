<?php
    
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    
    class BuildPermission {
        
        /**
         * BuildPermission constructor.
         */
        public function __construct() {
        }
        
        public function buildPermissions($entity, $permissionDetails) {
            
            $permissions = array();
            $id =1;
            foreach ($permissionDetails as $key => $value) {
                
                $permissions[] = $this->buildPermission($id,$entity, $key, $value);
                $id+=1;
            }
            
            return $permissions;
        }
        
        public function buildPermission($id,$entity, $key, $value) {
            
            $permission = new $entity($id,$key, $value, 0);
            
            return $permission;
        }
    }

?>