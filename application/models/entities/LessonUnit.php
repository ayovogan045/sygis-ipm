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
     * @ManyToOne(targetEntity="Speciality", inversedBy="lesson_units", fetch="LAZY")
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

    public function __construct(string $long_wording, string $medium_wording, 
            string $codeue, $lesson_unit_type, $speciality, bool $state) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->codeue = $codeue;
        $this->lesson_unit_type = $lesson_unit_type;
        $this->speciality = $speciality;
        $this->state = $state;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getLong_wording(): string {
        return $this->long_wording;
    }

    public function getMedium_wording(): string {
        return $this->medium_wording;
    }

    public function getCodeue(): string {
        return $this->codeue;
    }

    public function getLesson_unit_type() {
        return $this->lesson_unit_type;
    }

    public function getSpeciality() {
        return $this->speciality;
    }

    public function getCourses() {
        return $this->courses;
    }

    public function getState(): bool {
        return $this->state;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setLong_wording(string $long_wording): void {
        $this->long_wording = $long_wording;
    }

    public function setMedium_wording(string $medium_wording): void {
        $this->medium_wording = $medium_wording;
    }

    public function setCodeue(string $codeue): void {
        $this->codeue = $codeue;
    }

    public function setLesson_unit_type($lesson_unit_type): void {
        $this->lesson_unit_type = $lesson_unit_type;
    }

    public function setSpeciality($speciality): void {
        $this->speciality = $speciality;
    }

    public function setCourses($courses): void {
        $this->courses = $courses;
    }

    public function setState(bool $state): void {
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
