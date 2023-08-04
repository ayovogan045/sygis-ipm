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
 *  Mark
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="marks")
 * @An abstract objet which represent the database of Mark in datatable
 */
class Mark extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="value")
     * */
    private $value;

    /**
     * @ManyToOne(targetEntity="registrationcourse", inversedBy="marks", fetch="LAZY")
     * @JoinColumn(name="registration_course_id", nullable=false, referencedColumnName="id")
     * */
    private $registration_course;

    /**
     * @ManyToOne(targetEntity="evaluation", inversedBy="marks", fetch="LAZY")
     * @JoinColumn(name="evaluation_id", nullable=false, referencedColumnName="id")
     * */
    private $evaluation;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($value, $registration_course, $evaluation, $state) {
        $this->value = $value;
        $this->registration_course = $registration_course;
        $this->evaluation = $evaluation;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getValue() {
        return $this->value;
    }

    function getRegistration_course() {
        return $this->registration_course;
    }

    function getEvaluation() {
        return $this->evaluation;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function setRegistration_course($registration_course) {
        $this->registration_course = $registration_course;
    }

    function setEvaluation($evaluation) {
        $this->evaluation = $evaluation;
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
