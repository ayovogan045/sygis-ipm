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
 * School
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="schools")
 * @An abstract objet which represent the datatable of School in database
 */
class School extends Baseentity implements \Serializable {

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
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;
    
    /**
     * @OneToMany(targetEntity="personinfo", mappedBy="school")
     * */
    private $person_infos;
    
    function __construct($wording, $code, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->state = $state;        
        $this->person_infos = new ArrayCollection();
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

    function getState() {
        return $this->state;
    }

    function getPerson_infos() {
        return $this->person_infos;
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

    function setState($state) {
        $this->state = $state;
    }

    function setPerson_infos($person_infos) {
        $this->person_infos = $person_infos;
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
