<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
/**
 *  StaffPost
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="staffs_post")
 * @An abstract objet which represent the database of StaffPost in datatable
 * StaffPost
 */
class StaffPost extends Baseentity implements \Serializable {

    /**
     * @var int
     * @Id
     * @Column(type="integer",unique=true, nullable=false,name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="staff", inversedBy="staffposts", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="staff_id", nullable=false, referencedColumnName="id")
     * */
    private $staff;

    /**
     * @ManyToOne(targetEntity="post", inversedBy="staffposts", fetch="LAZY", cascade={"persist", "remove", "merge"})
     * @JoinColumn(name="post_id", nullable=false, referencedColumnName="id")
     * */
    private $post;

    /**
     * @var string
     * @Column(type="string",nullable=false, name="start_date")
     * */
    private $start_date;

    /**
     * @var boolean
     * @Column(type="integer", nullable=false, name="state")
     * */
    private $state;

    function __construct($staff, $post, $start_date, $state) {
        $this->staff = $staff;
        $this->post = $post;
        $this->start_date = $start_date;
        $this->state = $state;
    }

    function getId() {
        return $this->id;
    }

    function getStaff() {
        return $this->staff;
    }

    function getPost() {
        return $this->post;
    }

    function getStart_date() {
        return $this->start_date;
    }

    function getState() {
        return $this->state;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setStaff($staff) {
        $this->staff = $staff;
    }

    function setPost($post) {
        $this->post = $post;
    }

    function setStart_date($start_date) {
        $this->start_date = $start_date;
    }

    function setState($state) {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function __toString() {
//        return $this->getPermission()->getDescription();
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
