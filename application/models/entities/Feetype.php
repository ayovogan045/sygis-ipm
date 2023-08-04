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
 *  FeeType
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="fees_types")
 * @An abstract objet which represent the database of FeeType in datatable
 */
class FeeType extends Baseentity implements \Serializable {

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
    private $state = 0;

    /**
     * @OneToMany(targetEntity="Fee", mappedBy="fee_type")
     * */
    private $fees;

    public function __construct($wording, $code, $description, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->description = $description;
        $this->state = $state;
        $this->fees = new ArrayCollection();
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
     * @return ArrayCollection
     */
    public function getFees() {
        return $this->fees;
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

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setFees($fees) {
        $this->fees = $fees;
    }

    /**
     * @return string
     */
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
