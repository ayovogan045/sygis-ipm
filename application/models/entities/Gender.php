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
 * Gender
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="genders")
 * @An abstract objet which represent the database of Gender in datatable
 */
class Gender extends Baseentity  implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="long_wording")
     * */
    private $long_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="medium_wording")
     * */
    private $medium_wording;

    /**
     * @var string
     * @Column(type="string", nullable=false, name="short_wording")
     * */
    private $short_wording;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    /**
     * @OneToMany(targetEntity="personinfo", mappedBy="gender")
     * */
    private $person_infos;

    public function __construct($long_wording, $medium_wording, $short_wording, $state) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->short_wording = $short_wording;
        $this->state = $state;
        $this->person_infos = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLong_wording() {
        return $this->long_wording;
    }

    /**
     * @return string
     */
    public function getMedium_wording() {
        return $this->medium_wording;
    }

    /**
     * @return string
     */
    public function getShort_wording() {
        return $this->short_wording;
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
    public function getPerson_infos() {
        return $this->person_infos;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLong_wording($long_wording) {
        $this->long_wording = $long_wording;
    }

    public function setMedium_wording($medium_wording) {
        $this->medium_wording = $medium_wording;
    }

    public function setShort_wording($short_wording) {
        $this->short_wording = $short_wording;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function setPerson_infos($person_infos) {
        $this->person_infos = $person_infos;
    }

    /**
     * @return string
     */
    public function __toString() {
        return htmlspecialchars(str_replace("'", "\'", $this->long_wording));
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
