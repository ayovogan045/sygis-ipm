<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\EvaluationType;
use services\IEvaluationTypeService,
    dmapimpl\Service,
    daoImpl\EvaluationTypeDAO;

require_once APPPATH . 'models/services/IEvaluationTypeService.php';
require_once APPPATH . 'models/daoImpl/EvaluationTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of EvaluationTypeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of EvaluationType entity
 */
class EvaluationTypeService extends Service implements IEvaluationTypeService {

    private $evaluationTypeDAO;
    
    public function __construct() {
        parent::__construct(EvaluationType::class);
        $this->evaluationTypeDAO = new EvaluationTypeDAO();
    }

    public function getOneExist($entity) {
        return $this->getEvaluationTypeDAO()->getOneExist($entity);
    }
    function getEvaluationTypeDAO() {
        return $this->evaluationTypeDAO;
    }

    function setEvaluationTypeDAO($evaluationTypeDAO) {
        $this->evaluationTypeDAO = $evaluationTypeDAO;
    }


}
