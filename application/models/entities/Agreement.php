<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

use entities\Baseentity;
/**
 *Agreement
 * @author Xlencia
 * @Entity
 * @Table(name="agreements")
 * @An abstract objet which represent the database of agreement in datatable
 */
class Agreement extends Baseentity implements \Serializable {
    
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
     * @Column(type="string",nullable=false, name="code")
     * */
    private $code;
    
    /**
     * @var string
     * @Column(type="string",nullable=true, name="statut")
     * */
    private $file;
    
    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="état")
     * */
    private $state = 0;
    
    /**
     * @ManyToOne(targetEntity="Staff", inversedBy="agreements", fetch="EXTRA_LAZY")
     * @JoinColumn(name="staff_id", nullable=false, referencedColumnName="id")
     * */
    private $staff;
    
    public function __construct($wording, $code, $file, $state, $staff) {
        
        $this->wording = $wording;
        $this->code = $code;
        $this->file = $file;
        $this->state = $state;
        $this->staff = $staff;
    }
    
    public function getId() {
        
        return $this->id;
    }
    
    public function getWording() {
        
        return $this->wording;
    }
    
    public function getCode() {
        
        return $this->code;
    }
    
    public function getFile() {
        
        return $this->file;
    }
    
    public function getState() {
        
        return $this->state;
    }
    
    public function getStaff() {
        
        return $this->staff;
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
    
    public function setFile($file) {
        
        $this->file = $file;
    }
    
    public function setState($state) {
        
        $this->state = $state;
    }
    
    public function setStaff($staff) {
        
        $this->staff = $staff;
    }
    
    public function __toString() {
        
        return $this->wording;
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
