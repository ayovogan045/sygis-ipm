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
 * AcademicYear
 * @author mundhaka
 * @Entity
 * @MappedSuperclass
 * @Table(name="academicyears")
 * An abstract object which Represent the datatable of accademic year on database
 */
class AcademicYear extends Baseentity implements \Serializable {

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
     * @Column(type="string",nullable=false, name="code")
     * */
    private $code;

    /**
     * @var string
     * @Column(type="integer",nullable=true, name="current")
     * */
    private $current;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="activated")
     * */
    private $state;

    /**
     * @OneToMany(targetEntity="Semester", mappedBy="academicyear")
     * */
    private $semesters;

    /**
     * @OneToMany(targetEntity="Registration", mappedBy="academic_year")
     * */
    private $registrations;

    public function __construct($wording, $code, $current, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->current = $current;
        $this->state = $state;
        $this->semesters = new ArrayCollection();
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
    public function getCode() {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getCurrent() {
        return $this->current;
    }

    /**
     * @return int
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @return ArrayCollection
     */
    public function getRegistrations() {
        return $this->registrations;
    }

    /**
     * @param $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @param $wording
     */
    public function setWording($wording) {
        $this->wording = $wording;
    }

    /**
     * @param $code
     */
    public function setCode($code) {
        $this->code = $code;
    }

    /**
     * @param $current
     */
    public function setCurrent($current) {
        $this->current = $current;
    }

    /**
     * @param $state
     */
    public function setState($state) {
        $this->state = $state;
    }

    /**
     * @param $payments
     */
    public function setPayments($payments) {
        $this->payments = $payments;
    }

    /**
     * @param $registrations
     */
    public function setRegistrations($registrations) {
        $this->registrations = $registrations;
    }

    /**
     * @return string
     */
    public function __toString() {
        return "Année scolaire " . $this->code;
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
