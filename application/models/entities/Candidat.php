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
 * Candidat
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="candidats")
 * @An abstract objet which represent the datatable of candidat in database
 */
class Candidat extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="validated")
     * */
    private $validated = 0;

    /**
     * @OneToOne(targetEntity="PersonInfo", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="person_info_id", nullable=false, referencedColumnName="id")
     * */
    private $person_info;

    /**
     * @OneToMany(targetEntity="Registration", mappedBy="candidat")
     * */
    private $registrations;

    public function __construct($state, $validated, $person_info) {
        $this->state = $state;
        $this->validated = $validated;
        $this->person_info = $person_info;
    }

    public function getId() {
        return $this->id;
    }

    public function getState() {
        return $this->state;
    }

    public function getValidated() {
        return $this->validated;
    }

    public function getPerson_info() {
        return $this->person_info;
    }

    public function getRegistrations() {
        return $this->registrations;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setValidated($validated) {
        $this->validated = $validated;
    }

    public function setPerson_info($person_info) {
        $this->person_info = $person_info;
    }

    public function setRegistrations($registrations) {
        $this->registrations = $registrations;
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
