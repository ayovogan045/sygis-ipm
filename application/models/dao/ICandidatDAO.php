<?php
namespace dao;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 *@author Xlencia
 * @Data access object's interface of Candidat entity
 */
interface ICandidatDAO {
    //put your code here
    
    public function sizeOfAllValid();
    
    public function sizeOfAllNotValid();

    public function getAllValidated();
    
    public function getAllNotValidated();
    
    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc);
    
    public function getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc);
    
    public function getAllForRegistration($acyId);
    
    public function getAllForRegistrationFeePayment($acyId);
    
    public function updateOneStudentById($object, $pk1, $pk2);
    
}
