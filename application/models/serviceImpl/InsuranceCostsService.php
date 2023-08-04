<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\InsuranceCosts;
use services\IInsuranceCostsService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/IInsuranceCostsService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of AcademicYear
 *
 * @author mundhaka
 */
class InsuranceCostsService extends Service implements IInsuranceCostsService {

    public function __construct() {
        parent::__construct(InsuranceCosts::class);
    }

}
