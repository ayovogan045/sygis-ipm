<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\SchoolFee;
use services\ISchoolFeeService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/ISchoolFeeService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of AcademicYear
 *
 * @author mundhaka
 */
class SchoolFeeService extends Service implements ISchoolFeeService {

    public function __construct() {
        parent::__construct(SchoolFee::class);
    }

}
