<?php

namespace entities;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Baseentity;

use Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/entities/Baseentity.php';

/**
 * Level
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="levels")
 * @An abstract objet which represent the datatable of Level in database
 */
class Level extends Baseentity implements \Serializable {

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
    private $state = 0;
    
     /**
     * @OneToMany(targetEntity="classunit", mappedBy="level")
     * */
    private $class_units;
    
     /**
     * @OneToMany(targetEntity="Grade", mappedBy="level")
     * */
    private $grades;

    public function __construct($wording, $code, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->state = $state;
        $this->class_units = new ArrayCollection();
        $this->grades = new ArrayCollection();
    }
    
    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getWording() {
        return $this->wording;
    }
    
    /**
     * @return string
     */
    public function getCode() {
        return $this->code;
    }
    
    /**
     * @return bool
     */
    public function getState() {
        return $this->state;
    }
    
    /**
     * @return ArrayCollection
     */
    public function getClasses() {
        return $this->classes;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setWording($wording) {
        $this->wording = $wording;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setClasses($classes) {
        $this->classes = $classes;
    }
    
    /**
     * @return string
     */
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
