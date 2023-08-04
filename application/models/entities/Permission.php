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
     * Permission
     * @author Xlencia
     * @Entity
     * @MappedSuperclass
     * @Table(name="permissions")
     * @An abstract objet which represent the database of Permission in datatable
     */
    class Permission  extends Baseentity implements \Serializable {
        
        /**
         * @var int
         * @Id
         * @Column(type="integer",unique=true, nullable=false,name="id")
         * @GeneratedValue(strategy="IDENTITY")
         */
        private $id;
        
        /**
         * @var string
         * @Column(type="string",unique=true, nullable=false, name="wording")
         * */
        private $wording;
        
        /**
         * @var string
         * @Column(type="string",nullable=false, name="description")
         * */
        private $description;
        
        /**
         * @OneToMany(targetEntity="rolepermission", mappedBy="permission")
         * */
        private $role_permissions;
        
        /**
         * @var boolean
         * @Column(type="integer", nullable=false, name="state")
         * */
        private $state = 0;
        
        public function __construct($id,$wording, $description, $state) {
            
            $this->id = $id;
            $this->wording = $wording;
            $this->description = $description;
            $this->role_permissions = new ArrayCollection();
            $this->state = $state;
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
         * @return ArrayCollection
         */
        public function getRole_permissions() {
            
            return $this->role_permissions;
        }
        
        /**
         * @return bool
         */
        public function getState() {
            
            return $this->state;
        }
        
        public function setId($id) {
            
            $this->id = $id;
        }
        
        public function setWording($wording) {
            
            $this->wording = $wording;
        }
        
        public function setDescription($description) {
            
            $this->description = $description;
        }
        
        public function setRole_permissions($role_permissions) {
            
            $this->role_permissions = $role_permissions;
        }
        
        public function setState($state) {
            
            $this->state = $state;
        }
        
        /**
         * @return string
         */
        public function __toString() {
            
            return $this->getWording();
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