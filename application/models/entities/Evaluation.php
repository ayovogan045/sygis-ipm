<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * Evaluation
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="evaluations")
 * @An abstract objet which represent the database of evaluation in datatable
 */
class Evaluation extends Baseentity  implements \Serializable {

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
     * @var string
     * @Column(type="string",nullable=false, name="description")
     * */
    private $description;

    /**
     * @OneToMany(targetEntity="Mark", mappedBy="evaluation")
     * */
    private $marks;

    /**
     * @OneToMany(targetEntity="EvaluationType", mappedBy="evaluation")
     * */
    private $evaluation_types;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($wording, $code, $description, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->description = $description;
        $this->state = $state;
        $this->evaluation_types = new ArrayCollection();
        $this->marks = new ArrayCollection();
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

    function getDescription() {
        return $this->description;
    }

    function getMarks() {
        return $this->marks;
    }

    function getEvaluation_types() {
        return $this->evaluation_types;
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

    function setDescription($description) {
        $this->description = $description;
    }

    function setMarks($marks) {
        $this->marks = $marks;
    }

    function setEvaluation_types($evaluation_types) {
        $this->evaluation_types = $evaluation_types;
    }

    function setState($state) {
        $this->state = $state;
    }

    public function __toString() {
        return $this->getWording();
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
