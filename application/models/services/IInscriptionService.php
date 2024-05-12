<?php

namespace services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mundhaka
 */
interface IInscriptionService {

    //put your code here 

    public function getAllByAcademicYear($academicyear);
    
    public function getAllToRegistration();
    
    public function getAllForPrint($academicyear, $start_date, $end_date);

    public function getReceiptNumber();
}
