<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\PostType;
use services\IPostTypeService,
    dmapimpl\Service,
    daoImpl\PostTypeDAO;

require_once APPPATH . 'models/services/IPostTypeService.php';
require_once APPPATH . 'models/daoImpl/PostTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of PostTypeServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of PostType entity
 */
class PostTypeService extends Service implements IPostTypeService {

    private $postTypeDAO;

    public function __construct() {
        parent::__construct(PostType::class);
        $this->postTypeDAO = new PostTypeDAO();
    }

    public function getOneExist($entity) {
        return $this->getPostTypeDAO()->getOneExist($entity);
    }

    function getPostTypeDAO() {
        return $this->postTypeDAO;
    }

    function setPostTypeDAO($postTypeDAO) {
        $this->postTypeDAO = $postTypeDAO;
    }

}
