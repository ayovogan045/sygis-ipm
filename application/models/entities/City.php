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
 * City
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="cities")
 * @An abstract objet which represent the datatable of City in database
 */
class City extends Baseentity implements \Serializable{

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
     * @Column(type="string",nullable=false, name="description")
     * */
    private $description;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    /**
     * @ManyToOne(targetEntity="Country", inversedBy="cities", fetch="EAGER")
     * @JoinColumn(name="country_id", nullable=false, referencedColumnName="id")
     * */
    private $country;
    
    /**
     * @OneToMany(targetEntity="PersonInfo", mappedBy="birth_city")
     * */
    private $person_infos;
    
//    /**
//     * @OneToMany(targetEntity="PersonInfo", mappedBy="resident_city")
//     * */
//    private $person_info_resident_cities;

    public function __construct($wording, $description, $state, $country) {
        $this->wording = $wording;
        $this->description = $description;
        $this->state = $state;
        $this->country = $country;
        $this->person_infos = new ArrayCollection();
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
     * @return Country
     */
    public function getCountry() {
        return $this->country;
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
     * @param $country
     */
    public function setCountry($country) {
        $this->country = $country;
    }
    
    /**
     * @return string
     */
    public function getCountryWording() {
        return $this->getCountry()->getWording();
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
