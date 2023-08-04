<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * Worker
 * @author mundhaka
 * @Entity
 * @MappedSuperclass
 * @Table(name="workers")
 */
class Worker extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="activated")
     * */
    private $validated = 0;

    /**
     * @OneToOne(targetEntity="personinfo", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="person_info_id", nullable=false, referencedColumnName="id")
     * */
    private $person_info;

    function __construct($state, $validated, $person_info) {
        $this->state = $state;
        $this->validated = $validated;
        $this->person_info = $person_info;
    }

    function getId() {
        return $this->id;
    }

    function getState() {
        return $this->state;
    }

    function getValidated() {
        return $this->validated;
    }

    function getPerson_info() {
        return $this->person_info;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setValidated($validated) {
        $this->validated = $validated;
    }

    function setPerson_info($person_info) {
        $this->person_info = $person_info;
    }

    public function __toString() {

        return $this->person_info->__toString();
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
