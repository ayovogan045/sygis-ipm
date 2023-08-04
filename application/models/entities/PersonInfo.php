<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';

/**
 * PersonInfo
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="person_infos")
 * @An abstract objet which represent the datatable of PersonInfo in database
 */
class PersonInfo extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="last_name")
     * */
    private $last_name;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="first_name")
     * */
    private $first_name;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="guardian_name")
     * */
    private $guardian_name;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="guardian_phone")
     * */
    private $guardian_phone;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="guardian_mail")
     * */
    private $guardian_mail;
    
    /**
     * @var string
     * @Column(type="string",nullable=false, name="phone")
     * */
    private $phone;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="mail")
     * */
    private $mail;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="adress")
     * */
    private $adress;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="birth_date")
     * */
    private $birth_date;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="matricule")
     * */
    private $matricule;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="blood_group")
     * */
    private $blood_group;

    /**
     * @var string
     * @Column(type="string",nullable=true, name="picture")
     * */
    private $picture;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="create_date")
     * */
    private $create_date;

    /**
     * @ManyToOne(targetEntity="gender", inversedBy="person_infos", fetch="LAZY")
     * @JoinColumn(name="gender_id", nullable=false, referencedColumnName="id")
     * */
    private $gender;

    /**
     * @ManyToOne(targetEntity="city", inversedBy="person_infos", fetch="LAZY")
     * @JoinColumn(name="city_id", nullable=false, referencedColumnName="id")
     * */
    private $birth_city;

    /**
     * @ManyToOne(targetEntity="country", inversedBy="person_infos", fetch="LAZY")
     * @JoinColumn(name="country_id", nullable=false, referencedColumnName="id")
     * */
    private $nationality;

    /**
     * @ManyToOne(targetEntity="school", inversedBy="person_infos", fetch="LAZY")
     * @JoinColumn(name="school_id", nullable=true, referencedColumnName="id")
     * */
    private $old_school;
    
    /**
     * @var string
     * @Column(type="string",nullable=false, name="marital)
     * */
//    private $marital;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    function __construct($last_name, $first_name, $guardian_name, $guardian_phone,
            $guardian_mail, $phone, $mail, $adress, $birth_date, $matricule, $blood_group, 
            $picture, $create_date, $gender, $birth_city, $nationality, $old_school, $state) {
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->guardian_name = $guardian_name;
        $this->guardian_phone = $guardian_phone;
        $this->guardian_mail = $guardian_mail;
        $this->phone = $phone;
        $this->mail = $mail;
        $this->adress = $adress;
        $this->birth_date = $birth_date;
        $this->matricule = $matricule;
        $this->blood_group = $blood_group;
        $this->picture = $picture;
        $this->create_date = $create_date;
        $this->gender = $gender;
        $this->birth_city = $birth_city;
        $this->nationality = $nationality;
        $this->old_school = $old_school;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getGuardian_name() {
        return $this->guardian_name;
    }

    function getGuardian_phone() {
        return $this->guardian_phone;
    }

    function getGuardian_mail() {
        return $this->guardian_mail;
    }

    function getPhone() {
        return $this->phone;
    }

    function getMail() {
        return $this->mail;
    }

    function getAdress() {
        return $this->adress;
    }

    function getBirth_date() {
        return $this->birth_date;
    }

    function getMatricule() {
        return $this->matricule;
    }

    function getBlood_group() {
        return $this->blood_group;
    }

    function getPicture() {
        return $this->picture;
    }

    function getCreate_date() {
        return $this->create_date;
    }

    function getGender() {
        return $this->gender;
    }

    function getBirth_city() {
        return $this->birth_city;
    }

    function getNationality() {
        return $this->nationality;
    }

    function getOld_school() {
        return $this->old_school;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setGuardian_name($guardian_name) {
        $this->guardian_name = $guardian_name;
    }

    function setGuardian_phone($guardian_phone) {
        $this->guardian_phone = $guardian_phone;
    }

    function setGuardian_mail($guardian_mail) {
        $this->guardian_mail = $guardian_mail;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setBirth_date($birth_date) {
        $this->birth_date = $birth_date;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    function setBlood_group($blood_group) {
        $this->blood_group = $blood_group;
    }

    function setPicture($picture) {
        $this->picture = $picture;
    }

    function setCreate_date($create_date) {
        $this->create_date = $create_date;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setBirth_city($birth_city) {
        $this->birth_city = $birth_city;
    }

    function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    function setOld_school($old_school) {
        $this->old_school = $old_school;
    }

    function setState($state) {
        $this->state = $state;
    }

        
        /**
     * @return string
     */
    public function __toString() {
        return $this->last_name . ' ' . $this->first_name;
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
