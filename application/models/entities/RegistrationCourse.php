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
 *RegistrationCourse
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="registration_courses")
 * @An abstract objet which represent the database of RegistrationCourse in datatable
 */
class RegistrationCourse extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="registration", inversedBy="registration_courses", fetch="LAZY")
     * @JoinColumn(name="registration_id", nullable=false, referencedColumnName="id")
     * */
    private $registration;

    /**
     * @ManyToOne(targetEntity="course", inversedBy="registration_courses", fetch="LAZY")
     * @JoinColumn(name="course_id", nullable=false, referencedColumnName="id")
     * */
    private $course;
    
    /**
     * @OneToMany(targetEntity="mark", mappedBy="registration_course")
     * */
    private $marks;

    function __construct($registration, $course) {
        $this->registration = $registration;
        $this->course = $course;
        $this->marks = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getRegistration() {
        return $this->registration;
    }

    function getCourse() {
        return $this->course;
    }

    function getMarks() {
        return $this->marks;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRegistration($registration) {
        $this->registration = $registration;
    }

    function setCourse($course) {
        $this->course = $course;
    }

    function setMarks($marks) {
        $this->marks = $marks;
    }

    public function __toString() {
        return $this->long_wording;
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
