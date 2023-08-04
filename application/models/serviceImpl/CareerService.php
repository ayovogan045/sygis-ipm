<?php
namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use services\ICareerService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/ICareerService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of CareerServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Career entity
 */
class CareerService extends Service implements ICareerService {
    //put your code here
}
