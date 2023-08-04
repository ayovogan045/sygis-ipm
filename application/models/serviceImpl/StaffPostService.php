<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\StaffPost;
use services\IStaffPostService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IStaffPostService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *Description of StaffPostServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of StaffPost entity
 * Description of StaffPostService
 *
 * @author mundhaka
 */
class StaffPostService extends Service implements IStaffPostService {

    public function __construct() {
        parent::__construct(StaffPost::class);
    }

}
