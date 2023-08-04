<?php
namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Doctrine\Common\Collections\ArrayCollection;
use entities\Baseentity;

require_once APPPATH . 'models/entities/Baseentity.php';
/**
 * Session
 * @author Xlencia
 * @Entity
 * @MappedSuperclass
 * @Table(name="exams")
 * @An abstract objet which represent the database of Session in datatable
 */
class Exam extends Baseentity implements \Serializable {

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
     * @OneToMany(targetEntity="Exam", mappedBy="parent")
     */
    private $children;

    /**
     * @ManyToOne(targetEntity="Exam", inversedBy="children")
     * @JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    public function __construct($long_wording, $medium_wording, $short_wording) {
        $this->long_wording = $long_wording;
        $this->medium_wording = $medium_wording;
        $this->short_wording = $short_wording;
        $this->state = 0;
        $this->children = new ArrayCollection();
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
     * @return bool|int
     */
    public function getState() {
        return $this->state;
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
