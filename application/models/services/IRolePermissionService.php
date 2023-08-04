<?php
namespace services;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 *  Description RolePermissionService
 *
 * @author Xlencia
 * @The service interface of RolePermission entity
 */
interface IRolePermissionService {
    //put your code here
    
    public function getAllByRoleWithSortAndOrder($role);
    
    public function deleteAllByRole($role);
}
