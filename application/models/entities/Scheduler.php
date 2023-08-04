<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

//use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * Scheduler
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="schedulers")
 * @An abstract objet which represent the database of Scheduler in datatable
 */
class Scheduler extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="dayofweek")
     * */
    private $dayofweek;

    /**
     * @var time
     * @Column(type="time",nullable=false, name="starthour")
     * */
    private $start_hour;

    /**
     * @var time
     * @Column(type="time",nullable=false, name="endhour")
     * */
    private $end_hour;

    /**
     * @ManyToOne(targetEntity="staff", inversedBy="schedulers", fetch="LAZY")
     * @JoinColumn(name="staff_id", nullable=false, referencedColumnName="id")
     * */
    private $staff;

    /**
     * @ManyToOne(targetEntity="academicyear", inversedBy="schedulers", fetch="LAZY")
     * @JoinColumn(name="academic_year_id", nullable=false, referencedColumnName="id")
     * */
    private $academic_year;

    /**
     * @ManyToOne(targetEntity="course", inversedBy="schedulers", fetch="LAZY")
     * @JoinColumn(name="course_id", nullable=false, referencedColumnName="id")
     * */
    private $course;

    /**
     * @ManyToOne(targetEntity="classroom", inversedBy="schedulers", fetch="LAZY")
     * @JoinColumn(name="classroom_id", nullable=false, referencedColumnName="id")
     * */
    private $classroom;

    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="état")
     * */
    private $state = 0;

    function __construct($dayofweek, $start_hour, $end_hour, $staff, $academic_year, $course, $classroom, $state) {
        $this->dayofweek = $dayofweek;
        $this->start_hour = $start_hour;
        $this->end_hour = $end_hour;
        $this->staff = $staff;
        $this->academic_year = $academic_year;
        $this->course = $course;
        $this->classroom = $classroom;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getDayofweek() {
        return $this->dayofweek;
    }

    function getStart_hour() {
        return $this->start_hour;
    }

    function getEnd_hour() {
        return $this->end_hour;
    }

    function getStaff() {
        return $this->staff;
    }

    function getAcademic_year() {
        return $this->academic_year;
    }

    function getCourse() {
        return $this->course;
    }

    function getClassroom() {
        return $this->classroom;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDayofweek($dayofweek) {
        $this->dayofweek = $dayofweek;
    }

    function setStart_hour($start_hour) {
        $this->start_hour = $start_hour;
    }

    function setEnd_hour($end_hour) {
        $this->end_hour = $end_hour;
    }

    function setStaff($staff) {
        $this->staff = $staff;
    }

    function setAcademic_year($academic_year) {
        $this->academic_year = $academic_year;
    }

    function setCourse($course) {
        $this->course = $course;
    }

    function setClassroom($classroom) {
        $this->classroom = $classroom;
    }

    function setState($state) {
        $this->state = $state;
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
