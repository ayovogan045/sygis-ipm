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
 *  Course
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="courses")
 * @An abstract objet which represent the database of course in datatable
 */
class Course extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="credit")
     * */
    private $credit;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="long_wording")
     * */
    private $long_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="medium_wording")
     * */
    private $medium_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="short_wording")
     * */
    private $short_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="description")
     * */
    private $description;

    /**
     * @OneToMany(targetEntity="Scheduler", mappedBy="course")
     * */
    private $schedulers;

    /**
     * @OneToMany(targetEntity="RegistrationCourse", mappedBy="course")
     * */
    private $registration_courses;

    /**
     * @ManyToOne(targetEntity="LessonUnit", inversedBy="courses", fetch="LAZY")
     * @JoinColumn(name="lesson_unit_id", nullable=false, referencedColumnName="id")
     * */
    private $lessonunit;

    /**
     * @ManyToOne(targetEntity="ClassUnit", inversedBy="courses", fetch="LAZY")
     * @JoinColumn(name="class_unit_id", nullable=false, referencedColumnName="id")
     * */
    private $classunit;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($long_wording, $medium_wording, $short_wording, $description, $credit, $lessonunit, $classunit, $state) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->short_wording = $short_wording;
        $this->description = $description;
        $this->credit = $credit;
        $this->lessonunit = $lessonunit;
        $this->classunit = $classunit;
        $this->state = $state;
        $this->registration_courses = new ArrayCollection();
        $this->schedulers = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getCredit() {
        return $this->credit;
    }

    function getLong_wording() {
        return $this->long_wording;
    }

    function getMedium_wording() {
        return $this->medium_wording;
    }

    function getShort_wording() {
        return $this->short_wording;
    }

    function getDescription() {
        return $this->description;
    }

    function getSchedulers() {
        return $this->schedulers;
    }

    function getRegistration_courses() {
        return $this->registration_courses;
    }

    function getLessonunit() {
        return $this->lessonunit;
    }

    function getClassunit() {
        return $this->classunit;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCredit($credit) {
        $this->credit = $credit;
    }

    function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    function setShort_wording($short_wording) {
        $this->short_wording = $short_wording;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setSchedulers($schedulers) {
        $this->schedulers = $schedulers;
    }

    function setRegistration_courses($registration_courses) {
        $this->registration_courses = $registration_courses;
    }

    function setLessonunit($lessonunit) {
        $this->lessonunit = $lessonunit;
    }

    function setClassunit($classunit) {
        $this->classunit = $classunit;
    }

    function setState($state) {
        $this->state = $state;
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
