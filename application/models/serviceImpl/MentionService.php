<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace serviceImpl;

use entities\Mention;
use services\IMentionService,
    dmapimpl\Service,
    daoImpl\MentionDAO;

require_once APPPATH . 'models/services/IMentionService.php';
require_once APPPATH . 'models/daoImpl/MentionDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/Service.php';

/**
 *  Description of MentionServiceImpl
 *
 * @author Xlencia
 * @Implement the service interface of Mention entity
 */
class MentionService extends Service implements IMentionService {

    private $mentionDAO;

    public function __construct() {
        parent::__construct(Mention::class);
        $this->mentionDAO = new MentionDAO();
    }

    public function getOneExist($entity) {
        return $this->getMentionDAO()->getOneExist($entity);
    }

    function getMentionDAO() {
        return $this->mentionDAO;
    }

    function setMentionDAO($mentionDAO) {
        $this->mentionDAO = $mentionDAO;
    }

}
