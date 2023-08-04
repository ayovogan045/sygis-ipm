<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\KitFee;
use services\IKitFeeService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IKitFeeService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of AcademicYear
 *
 * @author mundhaka
 */
class KitFeeService extends Service implements IKitFeeService {

    public function __construct() {
        parent::__construct(KitFee::class);
    }

}
