<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

//use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * ClassUnitFee
 * @author xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="classunitfees")
 */
class ClassUnitFee extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Classunit", inversedBy="classunitfees", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="classunit_id", nullable=false, referencedColumnName="id")
     * */
    private $classunit;

    /**
     * @ManyToOne(targetEntity="Fee", inversedBy="classunitfees", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="fee_id", nullable=false, referencedColumnName="id")
     * */
    private $fee;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    function __construct($classunit, $fee, $state) {
        $this->classunit = $classunit;
        $this->fee = $fee;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getClassunit() {
        return $this->classunit;
    }

    function getFee() {
        return $this->fee;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setClassunit($classunit) {
        $this->classunit = $classunit;
    }

    function setFee($fee) {
        $this->fee = $fee;
    }

    function setState($state) {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->getId() . '';
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
