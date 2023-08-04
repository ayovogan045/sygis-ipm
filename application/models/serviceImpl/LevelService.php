<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Level;
use services\ILevelService,
    dmapimpl\Service,
    daoImpl\LevelDAO;

require_once APPPATH . 'models/services/ILevelService.php';
require_once APPPATH . 'models/daoImpl/LevelDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of LevelServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Level entity
 */
class LevelService extends Service implements ILevelService {

    private $levelDAO;

    public function __construct() {
        parent::__construct(Level::class);
        $this->levelDAO = new LevelDAO();
    }

    public function getOneExist($entity) {
        return $this->getLevelDAO()->getOneExist($entity);
    }

    function getLevelDAO() {
        return $this->levelDAO;
    }

    function setLevelDAO($levelDAO) {
        $this->levelDAO = $levelDAO;
    }

}
