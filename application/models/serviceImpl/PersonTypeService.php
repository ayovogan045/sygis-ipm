<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use services\IPersonTypeService,
        dmapimpl\Service;

require_once APPPATH . 'models/services/IPersonTypeService.php';
require_once APPPATH.'third_party/dmap/dmapimpl/Service.php';

/**
 *Description of PersonTypeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of PersonType entity
 */
class PersonTypeService extends Service implements IPersonTypeService{
    //put your code here
}