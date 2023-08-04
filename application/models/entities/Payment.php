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
//* @DiscriminatorMap({"p" = "payment", "a" = "insurancecosts", "sf" = "schoolfee", "kf" = "kitfee", "of" = "otherfee"})
/**
 *  Payment
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="dtype", type="string")
 * @Table(name="payments")
 * @An abstract objet which represent the database of Payment in datatable
 */
class Payment extends Baseentity  implements \Serializable {
    
    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var integer
     * @Column(type="integer",nullable=false, name="amount_paid")
     * */
    private $amount_paid;
    
    /**
     * @var integer
     * @Column(type="integer",nullable=false, name="rest_to_paid")
     * */
    private $rest_to_paid;
    
    /**
     * @var date
     * @Column(type="date",nullable=false, name="payment_date")
     * */
    private $payment_date;
    
    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;
    
    /**
     * @ManyToOne(targetEntity="registration", fetch="LAZY")
     * @JoinColumn(name="registration_id", nullable=false, referencedColumnName="id")
     * */
    private $registration;
    
    /**
     * @ManyToOne(targetEntity="fee", inversedBy="payments", fetch="LAZY")
     * @JoinColumn(name="fee_id", nullable=false, referencedColumnName="id")
     * */
    private $fee;
    
    public function __construct($amount_paid, $rest_to_paid, date $payment_date, $state, $registration, $fee) {
        
        $this->amount_paid = $amount_paid;
        $this->rest_to_paid = $rest_to_paid;
        $this->payment_date = $payment_date;
        $this->state = $state;
        $this->registration = $registration;
        $this->fee = $fee;
    }
    
    public function getId() {
        
        return $this->id;
    }
    
    public function getAmount_paid() {
        
        return $this->amount_paid;
    }
    
    public function getRest_to_paid() {
        
        return $this->rest_to_paid;
    }
    
    public function getPayment_date() {
        
        return $this->payment_date;
    }
    
    public function getState() {
        
        return $this->state;
    }
    
    public function getRegistration() {
        
        return $this->registration;
    }
    
    /**
     * @return Fee
     */
    public function getFee() {
        
        return $this->fee;
    }
    
    /**
     * @return ModalityPayment
     */
    public function getModality_payment() {
        
        return $this->modality_payment;
    }
    
    public function getAcademic_year() {
        
        return $this->academic_year;
    }
    
    public function setId($id) {
        
        $this->id = $id;
    }
    
    public function setAmount_paid($amount_paid) {
        
        $this->amount_paid = $amount_paid;
    }
    
    public function setRest_to_paid($rest_to_paid) {
        
        $this->rest_to_paid = $rest_to_paid;
    }
    
    public function setPayment_date(date $payment_date) {
        
        $this->payment_date = $payment_date;
    }
    
    public function setState($state) {
        
        $this->state = $state;
    }
    
    public function setRegistration($registration) {
        
        $this->registration = $registration;
    }
    
    public function setFee($fee) {
        
        $this->fee = $fee;
    }
    
    public function __toString() {
        
        return $this->fee . " avant le " . $this->delay;
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
