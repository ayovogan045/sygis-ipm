<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace entities;

/**
 * Baseentity
 * @author Xlencia
 * @An abstract objet
 */

/** @MappedSuperclass */
abstract class Baseentity implements \Serializable {

    /**
      @Column(nullable = false)
     */
    protected $version = 1;

    public function __construct() {
        
    }

    /**
     * @return int
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * @param $version
     */
    public function setVersion($version) {
        $this->version = $version;
    }

    public function serialize(): ?string {
        
    }

    public function unserialize(string $serialized): void {
        
    }

    public function encryptionId($id) {
        return "xlc0" . rand(0, $id) . ":_" . $id * 19;
    }

    public function decryptionId($id) {
        return explode("_", $id)[1] / 19;
    }

}
