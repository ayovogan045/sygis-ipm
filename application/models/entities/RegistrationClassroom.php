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
 * RegistrationClassroom
 * @author Xlencia
 * @Entity
 * @Table(name="classes")
 * @An abstract objet which represent the database of RegistrationClassroom in datatable
 */
class RegistrationClassroom extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="classroom", inversedBy="registration_classrooms", fetch="LAZY")
     * @JoinColumn(name="classroom_id", nullable=false, referencedColumnName="id")
     * */
    private $classroom;

    /**
     * @ManyToOne(targetEntity="registration", inversedBy="registration_classrooms", fetch="LAZY")
     * @JoinColumn(name="registration_id", nullable=false, referencedColumnName="id")
     * */
    private $registration;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="registrationclassroom_date")
     * */
    private $registrationclassroomdate;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($classroom, $registration, $registrationclassroomdate, $state) {
        $this->classroom = $classroom;
        $this->registration = $registration;
        $this->registrationclassroomdate = $registrationclassroomdate;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getClassroom() {
        return $this->classroom;
    }

    function getRegistration() {
        return $this->registration;
    }

    function getRegistrationclassroomdate() {
        return $this->registrationclassroomdate;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setClassroom($classroom) {
        $this->classroom = $classroom;
    }

    function setRegistration($registration) {
        $this->registration = $registration;
    }

    function setRegistrationclassroomdate($registrationclassroomdate) {
        $this->registrationclassroomdate = $registrationclassroomdate;
    }

    function setState($state) {
        $this->state = $state;
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
