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
 * Mention
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="mentions")
 * @An abstract objet which represent the datatable of Grade in database
 */
class Mention extends Baseentity implements \Serializable {

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
     * @Column(type="string", nullable=false, name="code")
     * */
    private $code;

    /**
     * @ManyToOne(targetEntity="Grade", inversedBy="mentions", fetch="LAZY")
     * @JoinColumn(name="grade_id", nullable=false, referencedColumnName="id")
     * */
    private $grade;
    
    /**
     * @OneToMany(targetEntity="Speciality", mappedBy="mention")
     * */
    private $specialities;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($wording, $code, $grade, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->grade = $grade;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    public function getGrade() {
        return $this->grade;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }
    
    public function setGrade($grade): void {
        $this->grade = $grade;
    }

    function setState($state) {
        $this->state = $state;
    }
    
    /**
     * @return string
     */
    public function getGradeWording() {
        return $this->getGrade()->getWording();
    }

    public function __toString() {
        return htmlspecialchars(str_replace("'", "\'", $this->getWording()));
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
