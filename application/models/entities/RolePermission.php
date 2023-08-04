<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * RolePermission
 * @author mundhaka
 * @Entity
 * @MappedSuperclass
 * @Table(name="rolepermissions")
 */
class RolePermission extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="permission", inversedBy="rolepermissions", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="permission_id", nullable=false, referencedColumnName="id")
     * */
    private $permission;
    
    /**
     * @ManyToOne(targetEntity="role", inversedBy="rolepermissions", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="role_id", nullable=false, referencedColumnName="id")
     * */
    private $role;
    
    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    public function __construct($permission, $role, $state) {
        $this->permission = $permission;
        $this->role = $role;
        $this->state = $state;
    }
    
    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @return Permission
     */
    public function getPermission() {
        return $this->permission;
    }
    
    /**
     * @return Role
     */
    public function getRole() {
        return $this->role;
    }
    
    /**
     * @return bool
     */
    public function getState() {
        return $this->state;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPermission($permission) {
        $this->permission = $permission;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setState($state) {
        $this->state = $state;
    }
    
    /**
     * @return string
     */
    public function __toString() {
        return $this->getPermission()->getDescription();
    }

        /**
     * @see \Serializable::serialize()
     */
    public function __serialize() {
        return $this->__serialize(array(
                    $this->id
        ));
    }

    /**
     * @see \Serializable::unserialize()
     * @param Array  $serialized
     */
    public function __unserialize(array $serialized) {
        list (
                $this->id
                ) = __unserialize($serialized);
    }

}
