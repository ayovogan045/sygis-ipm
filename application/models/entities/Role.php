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
 * Role
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="roles")
 * @An abstract objet which represent the database of Role in datatable
 */
class Role extends Baseentity  implements \Serializable {
    
    public static $admin = 'Admin';
    public static $secretaire = 'Secretaire';

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="wording")
     * */
    private $wording;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="description")
     * */
    private $description;

    /**
     * @OneToMany(targetEntity="rolepermission", mappedBy="role")
     * */
    private $role_permissions;
    
    /**
     * @OneToMany(targetEntity="usersrole", mappedBy="role")
     * */
    private $user_roles;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    public function __construct($wording, $description, $state) {
        $this->wording = $wording;
        $this->description = $description;
        $this->state = $state;
        $this->role_permissions = new ArrayCollection();
        $this->user_roles = new ArrayCollection();
    }
    
    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getWording() {
        return $this->wording;
    }
    
    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getRole_permissions() {
        return $this->role_permissions;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getUser_roles() {
        return $this->user_roles;
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

    public function setWording($wording) {
        $this->wording = $wording;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setRole_permissions($role_permissions) {
        $this->role_permissions = $role_permissions;
    }

    public function setUser_roles($user_roles) {
        $this->user_roles = $user_roles;
    }

    public function setState($state) {
        $this->state = $state;
    }

        public function __toString() {
        return $this->getWording();
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
