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
 * Classrooms
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="classrooms")
 * @An abstract objet which represent the datatable of classroom in database
 */
class Classroom extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Classunit", inversedBy="classrooms", fetch="LAZY")
     * @JoinColumn(name="class_unit_id", nullable=false, referencedColumnName="id")
     * */
    private $classunit;

    /**
     * @ManyToOne(targetEntity="Category", inversedBy="classrooms", fetch="LAZY")
     * @JoinColumn(name="group_id", nullable=false, referencedColumnName="id")
     * */
    private $group;

    /**
     * @OneToMany(targetEntity="Scheduler", mappedBy="classroom")
     * */
    private $schedulers;

    /**
     * @OneToMany(targetEntity="RegistrationClassroom", mappedBy="classroom")
     * */
    private $registration_classrooms;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($classunit, $group, $state) {
        $this->classunit = $classunit;
        $this->group = $group;
        $this->schedulers = new ArrayCollection();
        $this->registration_classrooms = new ArrayCollection();
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getClassunit() {
        return $this->classunit;
    }

    function getGroup() {
        return $this->group;
    }

    function getSchedulers() {
        return $this->schedulers;
    }

    function getRegistration_classrooms() {
        return $this->registration_classrooms;
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

    function setGroup($group) {
        $this->group = $group;
    }

    function setSchedulers($schedulers) {
        $this->schedulers = $schedulers;
    }

    function setRegistration_classrooms($registration_classrooms) {
        $this->registration_classrooms = $registration_classrooms;
    }

    function setState($state) {
        $this->state = $state;
    }
    
    /**
     * @return string
     */
    public function getGroupWording() {
        return $this->getGroup()->__toString();
    }
    
    /**
     * @return string
     */
    public function getClassunitWording() {
        return $this->getClassunit()->__toString();
    }

    public function __toString() {
        return $this->classunit->__toString() . " Grp " . $this->group->__toString();
    }
    

    public function getWording() {
        return $this-> __toString();
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
