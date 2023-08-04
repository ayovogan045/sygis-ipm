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
 *  Post
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="posts")
 * @An abstract objet which represent the database of Post in datatable
 */
class Post extends Baseentity implements \Serializable {

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
     * @Column(type="string", nullable=false, name="description")
     * */
    private $description;

    /**
     * @var integer
     * @Column(type="integer", nullable=false, name="état")
     * */
    private $state = 0;
    
    /**
     * @OneToMany(targetEntity="staffpost", mappedBy="post")
     * */
    private $staffposts;

    function __construct($wording, $code, $description, $state) {
        $this->wording = $wording;
        $this->code = $code;
        $this->description = $description;
        $this->state = $state;
        $this->staffposts = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getWording() {
        return $this->wording;
    }

    function getCode() {
        return $this->code;
    }

    function getDescription() {
        return $this->description;
    }

    function getState() {
        return $this->state;
    }

    function getStaffposts() {
        return $this->staffposts;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setCode($code) {
        $this->code = $code;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setState($state) {
        $this->state = $state;
    }

    function setStaffposts($staffposts) {
        $this->staffposts = $staffposts;
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
