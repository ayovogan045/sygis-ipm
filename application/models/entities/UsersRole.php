<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

//use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 *  UsersRole
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="usersroles")
 * @An abstract objet which represent the database of UsersRole in datatable
 */
class UsersRole extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="users", inversedBy="user_roles", fetch="LAZY")
     * @JoinColumn(name="users_id", nullable=false, referencedColumnName="id")
     * */
    private $users;
    
    /**
     * @ManyToOne(targetEntity="role", inversedBy="user_roles", fetch="LAZY")
     * @JoinColumn(name="role_id", nullable=false, referencedColumnName="id")
     * */
    private $role;
    
    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    public function __construct($users, $role, $state) {
        $this->users = $users;
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
     * @return Users
     */
    public function getUsers() {
        return $this->users;
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

    public function setUsers($users) {
        $this->users = $users;
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
        return $this->getId().'';
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
