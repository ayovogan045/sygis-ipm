<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\PersonInfo;
use services\IPersonInfoService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IPersonInfoService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of PersonInfoServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of PersonInfo entity
 */
class PersonInfoService extends Service implements IPersonInfoService {

    public function __construct() {
        parent::__construct(PersonInfo::class);
    }

}
