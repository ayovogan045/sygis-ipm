<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 *  Salary
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="salaries")
 * @An abstract objet which represent the database of Salary in datatable
 */
class Salary extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @Column(type="integer",nullable=false, name="amount")
     * */
    private $amount;

    /**
     * @var date
     * @Column(type="date",nullable=false, name="salarydate")
     * */
    private $salarydate;

    /**
     * @ManyToOne(targetEntity="staff", inversedBy="salaries", fetch="EXTRA_LAZY")
     * @JoinColumn(name="staff_id", nullable=false, referencedColumnName="id")
     * */
    private $staff;

    function __construct($amount, date $salarydate, $staff) {
        $this->amount = $amount;
        $this->salarydate = $salarydate;
        $this->staff = $staff;
    }

    function getId() {
        return $this->id;
    }

    function getAmount() {
        return $this->amount;
    }

    function getSalarydate(): date {
        return $this->salarydate;
    }

    function getStaff() {
        return $this->staff;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAmount($amount) {
        $this->amount = $amount;
    }

    function setSalarydate(date $salarydate) {
        $this->salarydate = $salarydate;
    }

    function setStaff($staff) {
        $this->staff = $staff;
    }

    public function __toString() {
        return $this->wording;
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
