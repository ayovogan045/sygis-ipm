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
 * Registration
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="registrations")
 * @An abstract objet which represent the database of Registration in datatable
 */
class Registration extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="registration_date")
     * */
    private $registration_date;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    /**
     * @OneToMany(targetEntity="registrationclassroom", mappedBy="registration")
     * */
    private $registration_classrooms;

    /**
     * @OneToMany(targetEntity="registrationcourse", mappedBy="registration")
     * */
    private $registration_courses;

    /**
     * @OneToMany(targetEntity="payment", mappedBy="registration")
     * */
    private $payments;

    /**
     * @ManyToOne(targetEntity="academicyear", inversedBy="modality_payments", fetch="LAZY")
     * @JoinColumn(name="academic_year_id", nullable=false, referencedColumnName="id")
     * */
    private $academic_year;

    /**
     * @ManyToOne(targetEntity="candidat",inversedBy="registrations", fetch="LAZY")
     * @JoinColumn(name="candidat_id", nullable=false, referencedColumnName="id")
     * */
    private $candidat;

    function __construct($registration_date, $state, $academic_year, $candidat) {
        $this->registration_date = $registration_date;
        $this->state = $state;
        $this->academic_year = $academic_year;
        $this->candidat = $candidat;
        $this->registration_classrooms = new ArrayCollection();
        $this->registration_courses = new ArrayCollection();
        $this->payments = new ArrayCollection();
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
    public function getRegistration_date() {
        return $this->registration_date;
    }
    
    /**
     * @return bool
     */
    public function getState() {
        return $this->state;
    }

    function getRegistration_classrooms() {
        return $this->registration_classrooms;
    }

    function getRegistration_courses() {
        return $this->registration_courses;
    }

    function getPayments() {
        return $this->payments;
    }
    
    /**
     * @return AcademicYear
     */
    public function getAcademic_year() {
        return $this->academic_year;
    }

    function getCandidat() {
        return $this->candidat;
    }
    
    /**
     * @param $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    public function setRegistration_date($registration_date) {
        $this->registration_date = $registration_date;
    }

    public function setState($state) {
        $this->state = $state;
    }

    function setRegistration_classrooms($registration_classrooms) {
        $this->registration_classrooms = $registration_classrooms;
    }

    function setRegistration_courses($registration_courses) {
        $this->registration_courses = $registration_courses;
    }

    function setPayments($payments) {
        $this->payments = $payments;
    }

    public function setAcademic_year($academic_year) {
        $this->academic_year = $academic_year;
    }

    function setCandidat($candidat) {
        $this->candidat = $candidat;
    }

    public function __toString() {
        return $this->candidat->__toString();
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
