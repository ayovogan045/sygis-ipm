<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\StepPayment;
use services\IStepPaymentService,
    dmapimpl\Service

//    dao\IAcademicYearDAO,
//    daoImpl\AcademicYearDAO
;

require_once APPPATH . 'models/services/IStepPaymentService.php';
//require_once APPPATH . 'models/daoImpl/AcademicYearDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of StepPaymentServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of StepPayment entity
 */
class StepPaymentService extends Service implements IStepPaymentService {

    public function __construct() {
        parent::__construct(StepPayment::class);
    }

}
