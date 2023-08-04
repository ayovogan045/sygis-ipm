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
 * Receipt
 * @author mundhaka
 * @Entity
 * @MappedSuperclass
 * @Table(name="receipts")
 * An abstract object which Represent the datatable of receipt on database
 */
class Receipt extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     * @Column(type="integer",nullable=false, name="number")
     * */
    private $number;

    function __construct($id, $number) {
        $this->id = $id;
        $this->number = $number;
    }

    function getId() {
        return $this->id;
    }

    function getNumber() {
        return $this->number;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumber($number) {
        $this->number = $number;
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
