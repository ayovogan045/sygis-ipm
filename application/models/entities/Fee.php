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
/**
 * Fee
 * @author Xlencia
 * @Entity
 * @Table(name="fees")
 * @An abstract objet which represent the database of Fee in datatable
 */
class Fee extends Baseentity  implements \Serializable {

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
     * @var int
     * @Column(type="integer",nullable=false, name="amount")
     * */
    private $amount;

    /**
     * @var int
     * @Column(type="integer", nullable=false, name="activated")
     * */
    private $state;

    /**
     * @ManyToOne(targetEntity="Feetype", inversedBy="fees", fetch="EXTRA_LAZY")
     * @JoinColumn(name="fee_type_id", nullable=false, referencedColumnName="id")
     * */
    private $fee_type;

    /**
     * @OneToMany(targetEntity="ClassunitFee", mappedBy="fee")
     * */
    private $classunitfees;

    /**
     * @OneToMany(targetEntity="Payment", mappedBy="fee")
     * */
    private $payments;

    function __construct($wording, $amount, $state, $fee_type) {
        $this->wording = $wording;
        $this->amount = $amount;
        $this->state = $state;
        $this->fee_type = $fee_type;
        $this->classunitfees = new ArrayCollection();
        $this->payments = new ArrayCollection();
    }

    public function getId(): int {
        return $this->id;
    }

    public function getWording(): string {
        return $this->wording;
    }

    public function getAmount(): int {
        return $this->amount;
    }

    public function getState(): int {
        return $this->state;
    }

    public function getFee_type() {
        return $this->fee_type;
    }

    public function getClassunitfees() {
        return $this->classunitfees;
    }

    public function getPayments() {
        return $this->payments;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setWording(string $wording): void {
        $this->wording = $wording;
    }

    public function setAmount(int $amount): void {
        $this->amount = $amount;
    }

    public function setState(int $state): void {
        $this->state = $state;
    }

    public function setFee_type($fee_type): void {
        $this->fee_type = $fee_type;
    }

    public function setClassunitfees($classunitfees): void {
        $this->classunitfees = $classunitfees;
    }

    public function setPayments($payments): void {
        $this->payments = $payments;
    }
    
    /**
     * @return string
     */
    public function __toString() {
        return $this->getWording() . ' - ' . $this->amount;
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
