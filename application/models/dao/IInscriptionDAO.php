<?php

namespace dao;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mundhaka
 */
interface IInscriptionDAO {

    public function getAllByAcademicYear($academicyear);
    
    public function getAllToRegistrationByAcademicYear($academicyear);
    
    public function abandonOne($pk);

    public function restoreOne($pk);
    
    public function getAllForPrint($academicyear, $start_date, $end_date);

    public function getReceiptNumber();
    //put your code here
}
