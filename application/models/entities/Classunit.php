<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';

use Doctrine\Common\Collections\ArrayCollection;

/**
 * ClassUnit
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="classunits")
 * @An abstract objet which represent the datatable of classunit in database
 */
class ClassUnit extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="$wording")
     * */
    private $wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="short_$wording")
     * */
    private $code;

    /**
     * @ManyToOne(targetEntity="Level", inversedBy="class_units", fetch="LAZY")
     * @JoinColumn(name="level_id", nullable=false, referencedColumnName="id")
     * */
    private $level;

    /**
     * @OneToMany(targetEntity="ClassunitFee", mappedBy="classunit")
     * */
    private $classunitfees;

    /**
     * @OneToMany(targetEntity="Classroom", mappedBy="classunit")
     * */
    private $classrooms;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($wording, $code, $level, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->level = $level;
        $this->state = $state;
        $this->classunitfees = new ArrayCollection();
        $this->classrooms = new ArrayCollection();
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

    function getLevel() {
        return $this->level;
    }

    function getClassunitfees() {
        return $this->classunitfees;
    }

    function getClassrooms() {
        return $this->classrooms;
    }

    function getState() {
        return $this->state;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function setClassunitfees($classunitfees) {
        $this->classunitfees = $classunitfees;
    }

    function setClassrooms($classrooms) {
        $this->classrooms = $classrooms;
    }

    function setState($state) {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getLevelWording() {
        return $this->getLevel()->__toString();
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
