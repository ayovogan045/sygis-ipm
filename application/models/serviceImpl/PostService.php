<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Post;
use services\IPostService,
    dmapimpl\Service,
    daoImpl\PostDAO;

require_once APPPATH . 'models/services/IPostService.php';
require_once APPPATH . 'models/daoImpl/PostDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 * Description of PostServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Post entity
 */
class PostService extends Service implements IPostService {

    private $postDAO;

    public function __construct() {
        parent::__construct(Post::class);
        $this->postDAO = new PostDAO();
    }

    public function getOneExist($entity) {
        return $this->getPostDAO()->getOneExist($entity);
    }

    function getPostDAO() {
        return $this->postDAO;
    }

    function setPostDAO($postDAO) {
        $this->postDAO = $postDAO;
    }

}
