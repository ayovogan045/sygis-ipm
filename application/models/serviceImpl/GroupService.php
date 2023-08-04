<?php

namespace serviceImpl;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use entities\Category;
use services\IGroupService,
    dmapimpl\Service,
    daoImpl\GroupDAO;

require_once APPPATH . 'models/services/IGroupService.php';
require_once APPPATH . 'models/daoImpl/GroupDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of GroupServiceImpl
 *
 * @author xlencia
 */
class GroupService extends Service implements IGroupService {

    private $groupDAO;

    public function __construct() {
        parent::__construct(Category::class);
        $this->groupDAO = new GroupDAO();
    }

    public function getOneExist($entity) {
        return $this->getGroupDAO()->getOneExist($entity);
    }

    function getGroupDAO() {
        return $this->groupDAO;
    }

    function setGroupDAO($groupDAO) {
        $this->groupDAO = $groupDAO;
    }

}
