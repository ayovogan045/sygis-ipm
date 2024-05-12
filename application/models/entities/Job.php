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
 *  Job
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="jobs")
 * @An abstract objet which represent the database of Job in datatable
 */
class Job extends Baseentity implements \Serializable {

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
     * @Column(type="string",nullable=false, name="adress")
     * */
    private $adress;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="phone")
     * */
    private $phone;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="fax")
     * */
    private $fax;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="mail")
     * */
    private $mail;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="period")
     * */
    private $period;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="activity")
     * */
    private $activity;

    /**
     * @ManyToOne(targetEntity="PersonInfo", inversedBy="jobs", fetch="LAZY")
     * @JoinColumn(name="personinfo_id", nullable=false, referencedColumnName="id")
     * */
    private $personinfo;

    /**
     * @ManyToOne(targetEntity="JobType", inversedBy="jobs", fetch="LAZY")
     * @JoinColumn(name="jobtype_id", nullable=false, referencedColumnName="id")
     * */
    private $jobtype;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state = 0;

    public function __construct(string $wording, string $adress, string $phone, string $fax,
            string $mail, string $period, string $activity, $personinfo, $jobtype, int $state) {
        $this->wording = $wording;
        $this->adress = $adress;
        $this->phone = $phone;
        $this->fax = $fax;
        $this->mail = $mail;
        $this->period = $period;
        $this->activity = $activity;
        $this->personinfo = $personinfo;
        $this->jobtype = $jobtype;
        $this->state = $state;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getWording(): string {
        return $this->wording;
    }

    public function getAdress(): string {
        return $this->adress;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getFax(): string {
        return $this->fax;
    }

    public function getMail(): string {
        return $this->mail;
    }

    public function getPeriod(): string {
        return $this->period;
    }

    public function getActivity(): string {
        return $this->activity;
    }

    public function getPersoninfo() {
        return $this->personinfo;
    }

    public function getJobtype() {
        return $this->jobtype;
    }

    public function getState(): int {
        return $this->state;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setWording(string $wording): void {
        $this->wording = $wording;
    }

    public function setAdress(string $adress): void {
        $this->adress = $adress;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function setFax(string $fax): void {
        $this->fax = $fax;
    }

    public function setMail(string $mail): void {
        $this->mail = $mail;
    }

    public function setPeriod(string $period): void {
        $this->period = $period;
    }

    public function setActivity(string $activity): void {
        $this->activity = $activity;
    }

    public function setPersoninfo($personinfo): void {
        $this->personinfo = $personinfo;
    }

    public function setJobtype($jobtype): void {
        $this->jobtype = $jobtype;
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
