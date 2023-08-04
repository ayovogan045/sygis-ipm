<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

//use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * Inscription
 * @author mundhaka
 * @Entity
 * @MappedSuperclass
 * @Table(name="inscriptions")
 */
class Inscription extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     * @Column(type="integer",nullable=false, name="amount_paid")
     * */
    private $amount_paid;

    /**
     * @var int
     * @Column(type="integer",nullable=false, name="rest_to_paid")
     * */
    private $rest_to_paid;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="payment_date")
     * */
    private $payment_date;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    /**
     * @ManyToOne(targetEntity="Candidat", fetch="LAZY")
     * @JoinColumn(name="candidat_id", nullable=false, referencedColumnName="id")
     * */
    private $candidat;

    /**
     * @ManyToOne(targetEntity="Fee", fetch="LAZY")
     * @JoinColumn(name="fee_id", nullable=false, referencedColumnName="id")
     * */
    private $fee;

    function __construct($amount_paid, $rest_to_paid, $payment_date, $state, $candidat, $fee) {
        $this->amount_paid = $amount_paid;
        $this->rest_to_paid = $rest_to_paid;
        $this->payment_date = $payment_date;
        $this->state = $state;
        $this->candidat = $candidat;
        $this->fee = $fee;
    }

    function getId() {
        return $this->id;
    }

    function getAmount_paid() {
        return $this->amount_paid;
    }

    function getRest_to_paid() {
        return $this->rest_to_paid;
    }

    function getPayment_date() {
        return $this->payment_date;
    }

    function getState() {
        return $this->state;
    }

    function getCandidat() {
        return $this->candidat;
    }

    function getFee() {
        return $this->fee;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAmount_paid($amount_paid) {
        $this->amount_paid = $amount_paid;
    }

    function setRest_to_paid($rest_to_paid) {
        $this->rest_to_paid = $rest_to_paid;
    }

    function setPayment_date($payment_date) {
        $this->payment_date = $payment_date;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setCandidat($candidat) {
        $this->candidat = $candidat;
    }

    function setFee($fee) {
        $this->fee = $fee;
    }

    public function __toString() {
        return $this->candidat->__toString();
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
