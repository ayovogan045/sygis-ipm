<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';

/**
 * Semester
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="semesters")
 * @An abstract objet which represent the datatable of Semester in database
 */
class Semester extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="short_wording")
     * */
    private $short_wording;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="medium_wording")
     * */
    private $medium_wording;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="long_wording")
     * */
    private $long_wording;

    /**
     * @var string
     * @Column(type="string",nullable=true, name="current")
     * */
    private $current;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="activated")
     * */
    private $state;

    /**
     * @ManyToOne(targetEntity="AcademicYear", inversedBy="semesters", fetch="EAGER")
     * @JoinColumn(name="academicyear_id", nullable=false, referencedColumnName="id")
     * */
    private $academicyear;
    
    function __construct($short_wording, $medium_wording, $long_wording, $current, $state, $academicyear) {
        $this->short_wording = $short_wording;
        $this->medium_wording = $medium_wording;
        $this->long_wording = $long_wording;
        $this->current = $current;
        $this->state = $state;
        $this->academicyear = $academicyear;
    }

        function getId() {
        return $this->id;
    }

    function getShort_wording() {
        return $this->short_wording;
    }

    function getMedium_wording() {
        return $this->medium_wording;
    }

    function getLong_wording() {
        return $this->long_wording;
    }

    function getCurrent() {
        return $this->current;
    }

    function getState() {
        return $this->state;
    }

    function getAcademicyear() {
        return $this->academicyear;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setShort_wording($short_wording) {
        $this->short_wording = $short_wording;
    }

    function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    function setCurrent($current) {
        $this->current = $current;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setAcademicyear($academicyear) {
        $this->academicyear = $academicyear;
    }

    
    /**
     * @return string
     */
    public function __toString() {
        return htmlspecialchars(str_replace("'", "\'", $this->getLong_wording()));
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
