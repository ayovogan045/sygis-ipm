<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use services\IPersonService,
        dmapimpl\Service;

require_once APPPATH . 'models/services/IPersonService.php';
require_once APPPATH.'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of PersonServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Person entity
 */
class PersonService extends Service implements IPersonService{
    //put your code here
}