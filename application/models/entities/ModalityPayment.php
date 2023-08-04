<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
//* @DiscriminatorMap({"mp" = "modalitypayment", "sp" = "steppayment", "bp" = "blockpayment", "fp" = "freepayment", "s" = "subvention"})
/**
 * ModalityPayment
 * @author xlencia
 * @Entity
 * @MappedSuperclass
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="dtype", type="string")
 * @Table(name="modality_payments")
 * @An abstract objet which represent the datatable of ModalityPayment in database
 */
class ModalityPayment extends Baseentity  implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="delay")
     * */
    private $delay;

    /**
     * @var int
     * @Column(type="integer",nullable=false, name="step_number")
     * */
    private $stepNumber;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="description")
     * */
    private $description;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="activated")
     * */
    private $state = 0;

    /**
     * @OneToMany(targetEntity="registration", mappedBy="modality_payment")
     * */
    private $registrations;

    function __construct($delay, $stepNumber, $description, $state) {
        $this->delay = $delay;
        $this->stepNumber = $stepNumber;
        $this->description = $description;
        $this->state = $state;
        $this->registrations = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getDelay() {
        return $this->delay;
    }

    function getStepNumber() {
        return $this->stepNumber;
    }

    function getDescription() {
        return $this->description;
    }

    function getState() {
        return $this->state;
    }

    function getRegistrations() {
        return $this->registrations;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDelay($delay) {
        $this->delay = $delay;
    }

    function setStepNumber($stepNumber) {
        $this->stepNumber = $stepNumber;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setRegistrations($registrations) {
        $this->registrations = $registrations;
    }

    /**
     * @return string
     */
    public function __toString() {
        if ($this->stepNumber > 1) {
            return "Paiement en " . $this->stepNumber . " tranche(s) au plus tard le " . $this->delay;
        }
        return "Paiement au plus tard le " . $this->delay;
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
