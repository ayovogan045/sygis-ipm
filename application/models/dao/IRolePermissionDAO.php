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
 *@Data access object's interface of RolePermissionentity
 */
interface IRolePermissionDAO {
    //put your code here
    public function getAllByRoleWithSortAndOrder($role);
    
    public function deleteAllByRole($role);
}
