<?php

namespace services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * Description of ModalityPaymentService
 *
 * @author Xlencia
 * @The service interface of ModalityPayment entity
 */
interface IModalityPaymentService {

    //put your code here
    public function getAllBlockPayment();

    public function getAllStepPayment();
    
    public function getAllFreePayment();
    
    public function getAllSubvention();
}
