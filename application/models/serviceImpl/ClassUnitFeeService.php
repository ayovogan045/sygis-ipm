<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\ClassUnitFee;
use services\IClassUnitFeeService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IClassUnitFeeService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of ClassUnitFeeService
 *
 * @author mundhaka
 */
class ClassUnitFeeService extends Service implements IClassUnitFeeService {

    public function __construct() {
        parent::__construct(ClassUnitFee::class);
    }

}
