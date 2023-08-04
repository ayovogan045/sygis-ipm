<?php

namespace services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * Description WorkerService
 *
 * @author Xlencia
 * @The service interface of Worker entity
 * @author mundhaka
 */
interface IWorkerService {

    //put your code here
    public function activated($pk);
    
    public function sizeOfAllValid();
    
    public function sizeOfAllNotValid();

    public function getAllValidated();
    
    public function getAllNotValidated();
    
    public function getAllValidatedWithSortAndOrder($sortProperty, $sortAsc);
    
    public function getAllNotValidatedWithSortAndOrder($sortProperty, $sortAsc);
    
}
