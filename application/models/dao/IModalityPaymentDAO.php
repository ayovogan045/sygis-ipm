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
interface IModalityPaymentDAO {
    //put your code here
    
    public function getAllBlockPayment();
    
    public function getAllStepPayment();
    
    public function getAllFreePayment();
    
    public function getAllSubvention();
    
}
