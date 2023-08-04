<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Group
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="categories")
 * @An abstract objet which represent the table of Group in database
 */
class Category extends Baseentity implements \Serializable {

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
     * @OneToMany(targetEntity="Classroom", mappedBy="group")
     * */
    private $classrooms;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    public function __construct($wording, $state) {
        $this->wording = $wording;
        $this->state = $state;
        $this->classrooms = new ArrayCollection();
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

    function getClassrooms() {
        return $this->classrooms;
    }
    
    /**
     * @return bool|int
     */
    public function getState() {
        return $this->state;
    }
    
    /**
     * @param $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    public function setWording($wording) {
        $this->wording = $wording;
    }

    function setClassrooms($classrooms) {
        $this->classrooms = $classrooms;
    }

    function setState($state) {
        $this->state = $state;
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
