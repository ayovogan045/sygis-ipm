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
 * Cursus
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="cursuss")
 * @An abstract objet which represent the database of Cursus in datatable
 */
class Cursus extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="acyear")
     * */
    private $acyear;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="school")
     * */
    private $school;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="domain")
     * */
    private $domain;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="way")
     * */
    private $way;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="locate")
     * */
    private $locate;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="credit")
     * */
    private $credit;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="activity")
     * */
    private $activity;

    /**
     * @ManyToOne(targetEntity="PersonInfo", inversedBy="certificat", fetch="LAZY")
     * @JoinColumn(name="personinfo_id", nullable=false, referencedColumnName="id")
     * */
    private $certificat;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    public function __construct(string $acyear, string $school, string $domain, string $way,
            string $locate, string $credit, string $activity, $certificat, int $state) {
        $this->acyear = $acyear;
        $this->school = $school;
        $this->domain = $domain;
        $this->way = $way;
        $this->locate = $locate;
        $this->credit = $credit;
        $this->activity = $activity;
        $this->certificat = $certificat;
        $this->state = $state;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getAcyear(): string {
        return $this->acyear;
    }

    public function getSchool(): string {
        return $this->school;
    }

    public function getDomain(): string {
        return $this->domain;
    }

    public function getWay(): string {
        return $this->way;
    }

    public function getLocate(): string {
        return $this->locate;
    }

    public function getCredit(): string {
        return $this->credit;
    }

    public function getActivity(): string {
        return $this->activity;
    }

    public function getCertificat() {
        return $this->certificat;
    }

    public function getState(): int {
        return $this->state;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setAcyear(string $acyear): void {
        $this->acyear = $acyear;
    }

    public function setSchool(string $school): void {
        $this->school = $school;
    }

    public function setDomain(string $domain): void {
        $this->domain = $domain;
    }

    public function setWay(string $way): void {
        $this->way = $way;
    }

    public function setLocate(string $locate): void {
        $this->locate = $locate;
    }

    public function setCredit(string $credit): void {
        $this->credit = $credit;
    }

    public function setActivity(string $activity): void {
        $this->activity = $activity;
    }

    public function setCertificat($certificat): void {
        $this->certificat = $certificat;
    }

    public function setState(int $state): void {
        $this->state = $state;
    }

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
