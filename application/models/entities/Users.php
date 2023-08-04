<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * Users
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="users")
 * @An abstract objet which represent the database of Users in datatable
 */
class Users extends Baseentity implements \Serializable {
    
    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     * @Column(type="string",nullable=false, name="login")
     * */
    private $login;
    
    /**
     * @var string
     * @Column(type="string",nullable=false, name="password")
     * */
    private $password;
    
    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;
    
    /**
     * @var String
     * @Column(type="string", nullable=false, name="activated")
     * */
    private $activated = 'Non';
    
    /**
     * @OneToOne(targetEntity="staff", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="staff_id", nullable=false, referencedColumnName="id")
     * */
    private $staff;
    
    /**
     * @OneToMany(targetEntity="usersrole", mappedBy="users")
     * */
    private $user_roles;
    
    public function __construct($login, $password, $state, $activated, $staff) {
        
        $this->login = $login;
        $this->password = $password;
        $this->state = $state;
        $this->activated = $activated;
        $this->staff = $staff;
    }
      
    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getState() {
        return $this->state;
    }

    function getActivated() {
        return $this->activated;
    }

    function getStaff() {
        return $this->staff;
    }

    function getUser_roles() {
        return $this->user_roles;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setActivated($activated) {
        $this->activated = $activated;
    }

    function setStaff($staff) {
        $this->staff = $staff;
    }

    function setUser_roles($user_roles) {
        $this->user_roles = $user_roles;
    }    
    
    public function __toString() {
        
        return $this->staff->__toString() . ' : ' . $this->getLogin();
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
