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
 * Grade
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="specialities")
 * @An abstract objet which represent the datatable of Grade in database
 */
class Speciality extends Baseentity implements \Serializable {

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
     * @ManyToOne(targetEntity="Mention", inversedBy="specialities", fetch="LAZY")
     * @JoinColumn(name="mention_id", nullable=false, referencedColumnName="id")
     * */
    private $mention;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($wording, $code, $mention, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->mention = $mention;
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
    
    public function getMention() {
        return $this->mention;
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

    public function setMention($mention): void {
        $this->mention = $mention;
    }
    
    function setState($state) {
        $this->state = $state;
    }
    
    /**
     * @return string
     */
    public function getMentionWording() {
        return $this->getMention()->getWording();
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
