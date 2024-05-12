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
 * @Table(name="grades")
 * @An abstract objet which represent the datatable of Grade in database
 */
class Grade extends Baseentity implements \Serializable {

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
     * @ManyToOne(targetEntity="Level", inversedBy="grades", fetch="LAZY")
     * @JoinColumn(name="level_id", nullable=false, referencedColumnName="id")
     * */
    private $level;
    
      /**
     * @OneToMany(targetEntity="Mention", mappedBy="grade")
     * */
    private $mentions;
    
      /**
     * @OneToMany(targetEntity="PersonInfo", mappedBy="grade")
     * */
    private $grade_person_infos;

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

    function setLevel($level) {
        $this->level = $level;
    }

    function setState($state) {
        $this->state = $state;
    }
    
    /**
     * @return string
     */
    public function getLevelWording() {
        return $this->getLevel()->getWording();
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
