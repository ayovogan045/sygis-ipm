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
 *WorkTime
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="worktimes")
 * @An abstract objet which represent the database of WorkTime in datatable
 */
class WorkTime extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var time
     * @Column(type="time",nullable=false, name="starthour")
     * */
    private $start_hour;

    /**
     * @var time
     * @Column(type="time",nullable=false, name="endhour")
     * */
    private $end_hour;

    /**
     * @var time
     * @Column(type="date",nullable=false, name="workdate")
     * */
    private $workdate;

    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="état")
     * */
    private $state = 0;

    /**
     * @ManyToOne(targetEntity="staff", inversedBy="worktimes", fetch="EXTRA_LAZY")
     * @JoinColumn(name="staff_id", nullable=false, referencedColumnName="id")
     * */
    private $staff;

    function __construct(time $start_hour, time $end_hour, time $workdate, $state, $staff) {
        $this->start_hour = $start_hour;
        $this->end_hour = $end_hour;
        $this->workdate = $workdate;
        $this->state = $state;
        $this->staff = $staff;
    }

    function getId() {
        return $this->id;
    }

    function getStart_hour(): time {
        return $this->start_hour;
    }

    function getEnd_hour(): time {
        return $this->end_hour;
    }

    function getWorkdate(): time {
        return $this->workdate;
    }

    function getState() {
        return $this->state;
    }

    function getStaff() {
        return $this->staff;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStart_hour(time $start_hour) {
        $this->start_hour = $start_hour;
    }

    function setEnd_hour(time $end_hour) {
        $this->end_hour = $end_hour;
    }

    function setWorkdate(time $workdate) {
        $this->workdate = $workdate;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setStaff($staff) {
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
