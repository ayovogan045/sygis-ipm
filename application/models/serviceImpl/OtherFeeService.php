<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\OtherFee;
use services\IOtherFeeService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IOtherFeeService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of AcademicYear
 *
 * @author mundhaka
 */
class OtherFeeService extends Service implements IOtherFeeService {

    public function __construct() {
        parent::__construct(OtherFee::class);
    }

}
