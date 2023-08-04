<?php

namespace dao;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Xlencia
 * @Data access object's interface of Payment
 */
interface IPaymentDAO {

    public function saveOne($object);

    public function abandonOne($pk);

    public function restoreOne($pk);
    
    public function getAllForPrint($first_date, $snd_date);

    public function getReceiptNumber();
    
     public function getAllSchoolFeesByStudent($student_id, $acyear_id);
    //put your code here
}
