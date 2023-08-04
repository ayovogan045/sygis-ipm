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
 * Country
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="countries")
 * @An abstract objet which represent the datatable of Country in database
 */
class Country extends Baseentity implements \Serializable {

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
     * @Column(type="string",nullable=false, name="short_wording")
     * */
    private $shortWording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="code")
     * */
    private $code;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="nationality")
     * */
    private $nationality;

    /**
     * @OneToMany(targetEntity="City", mappedBy="country")
     * */
    private $cities;

    /**
     * @OneToMany(targetEntity="PersonInfo", mappedBy="nationality")
     * */
    private $person_infos;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    public function __construct($wording, $shortWording, $code, $nationality, $state) {
        $this->wording = $wording;
        $this->shortWording = $shortWording;
        $this->code = $code;
        $this->nationality = $nationality;
        $this->state = $state;
        $this->person_infos = new ArrayCollection();
        $this->cities = new ArrayCollection();
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
    public function getShortWording() {
        return $this->shortWording;
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
    public function getNationality() {
        return $this->nationality;
    }

    /**
     * @return City
     */
    public function getCities() {
        return $this->cities;
    }

    /**
     * @return ArrayCollection
     */
    public function getPerson_infos() {
        return $this->person_infos;
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
     * @param $shortWording
     */
    public function setShortWording($shortWording) {
        $this->shortWording = $shortWording;
    }

    /**
     * @param $code
     */
    public function setCode($code) {
        $this->code = $code;
    }

    /**
     * @param $nationality
     */
    public function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    /**
     * @param $cities
     */
    public function setCities($cities) {
        $this->cities = $cities;
    }

    /**
     * @param $person_infos
     */
    public function setPerson_infos($person_infos) {
        $this->person_infos = $person_infos;
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
