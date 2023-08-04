<?php

namespace entities;

use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;
require_once APPPATH . 'models/entities/Baseentity.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  Staff
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="staffs")
 * @An abstract objet which represent the database of Staff in datatable
 */
class Staff extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    /**
     * @OneToOne(targetEntity="worker", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="worker_id", nullable=false, referencedColumnName="id")
     * */
    private $employee;

    /**
     * @OneToMany(targetEntity="staffpost", mappedBy="staff")
     * */
    private $staffposts;

    /**
     * @OneToMany(targetEntity="worktime", mappedBy="staff")
     * */
    private $worktimes;

    /**
     * @OneToMany(targetEntity="agreement", mappedBy="staff")
     * */
    private $agreements;

    /**
     * @OneToMany(targetEntity="scheduler", mappedBy="staff")
     * */
    private $schedulers;

    /**
     * @OneToMany(targetEntity="salary", mappedBy="staff")
     * */
    private $salaries;

    /**
     * @OneToOne(targetEntity="users", mappedBy="staff")
     * */
//    private $users;

    function __construct($state, $employee) {
        $this->state = $state;
        $this->employee = $employee;
        $this->staffposts = new ArrayCollection();
        $this->worktimes = new ArrayCollection();
        $this->agreements = new ArrayCollection();
        $this->schedulers = new ArrayCollection();
        $this->salaries = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getState() {
        return $this->state;
    }

    function getEmployee() {
        return $this->employee;
    }

    function getStaffposts() {
        return $this->staffposts;
    }

    function getWorktimes() {
        return $this->worktimes;
    }

    function getAgreements() {
        return $this->agreements;
    }

    function getSchedulers() {
        return $this->schedulers;
    }

    function getSalaries() {
        return $this->salaries;
    }

//    function getUsers() {
//        return $this->users;
//    }

    function setId($id) {
        $this->id = $id;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setEmployee($employee) {
        $this->employee = $employee;
    }

    function setStaffposts($staffposts) {
        $this->staffposts = $staffposts;
    }

    function setWorktimes($worktimes) {
        $this->worktimes = $worktimes;
    }

    function setAgreements($agreements) {
        $this->agreements = $agreements;
    }

    function setSchedulers($schedulers) {
        $this->schedulers = $schedulers;
    }

    function setSalaries($salaries) {
        $this->salaries = $salaries;
    }

//    function setUsers($users) {
//        $this->users = $users;
//    }


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
