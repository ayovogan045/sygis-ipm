<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

use Doctrine\Common\Collections\ArrayCollection;

use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';

/**
 * LessonUnit
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="lesson_units")
 * @An abstract objet which represent the datatable of LessonUnit in database
 */
class LessonUnit extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="long_wording")
     * */
    private $long_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="medium_wording")
     * */
    private $medium_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="codeue")
     * */
    private $codeue;

    /**
     * @ManyToOne(targetEntity="LessonUnitType", inversedBy="lesson_units", fetch="LAZY")
     * @JoinColumn(name="lesson_unit_type_id", nullable=false, referencedColumnName="id")
     * */
    private $lesson_unit_type;

    /**
     * @ManyToOne(targetEntity="Speciatilty", inversedBy="lesson_units", fetch="LAZY")
     * @JoinColumn(name="speciality_id", nullable=false, referencedColumnName="id")
     * */
    private $speciality;

    /**
     * @OneToMany(targetEntity="course", mappedBy="lesson_unit")
     * */
    private $courses;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    public function __construct($long_wording, $medium_wording, $codeue,
            $state, $lesson_unit_type, $lesson_unit_mention) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->codeue = $codeue;
        $this->state = $state;
        $this->lesson_unit_type = $lesson_unit_type;
        $this->lesson_unit_mention = $lesson_unit_mention;
        $this->courses = new ArrayCollection();
    }
    function getId() {
        return $this->id;
    }

    function getLong_wording() {
        return $this->long_wording;
    }

    function getMedium_wording() {
        return $this->medium_wording;
    }

    function getCodeue() {
        return $this->codeue;
    }

    function getLesson_unit_type() {
        return $this->lesson_unit_type;
    }

    function getLesson_unit_mention() {
        return $this->lesson_unit_mention;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    function setCodeue($codeue) {
        $this->codeue = $codeue;
    }

    function setLesson_unit_type($lesson_unit_type) {
        $this->lesson_unit_type = $lesson_unit_type;
    }

    function setLesson_unit_mention($lesson_unit_mention) {
        $this->lesson_unit_mention = $lesson_unit_mention;
    }

    function setState($state) {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->long_wording;
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
