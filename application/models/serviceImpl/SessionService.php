<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Session;
use services\ISessionService,
    dmapimpl\Service;

require_once APPPATH . 'models/services/ISessionService.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of SessionServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of SessionService entity
 */
class SessionService extends Service implements ISessionService {

    public function __construct() {
        parent::__construct(Session::class);
    }

}
