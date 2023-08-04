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
 * EvalutionType
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="evaluations_types")
 * @An abstract objet which represent the database of EvaluationType in datatable
 */
class EvaluationType extends Baseentity implements \Serializable {

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
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    public function __construct($wording, $code, $description, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->description = $description;
        $this->state = $state;
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
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }
    
    /**
     * @return bool
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
    
    /**
     * @param $wording
     */
    public function setWording($wording) {
        $this->wording = $wording;
    }
    
    /**
     * @param $code
     */
    public function setCode($code) {
        $this->code = $code;
    }
    
    /**
     * @param $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }
    
    /**
     * @param $state
     */
    public function setState($state) {
        $this->state = $state;
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
