<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\ServiceType;
use services\IServiceTypeService,
    dmapimpl\Service,
    daoImpl\ServiceTypeDAO;

require_once APPPATH . 'models/services/IServiceTypeService.php';
require_once APPPATH . 'models/daoImpl/ServiceTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of ServiceTypeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of ServiceType entity
 */
class ServiceTypeService extends Service implements IServiceTypeService {

    private $serviceTypeDAO;

    public function __construct() {
        parent::__construct(ServiceType::class);
        $this->serviceTypeDAO = new ServiceTypeDAO();
    }

    public function getOneExist($entity) {
        return $this->getServiceTypeDAO()->getOneExist($entity);
    }
    
    function getServiceTypeDAO() {
        return $this->serviceTypeDAO;
    }

    function setServiceTypeDAO($serviceTypeDAO) {
        $this->serviceTypeDAO = $serviceTypeDAO;
    }

}
