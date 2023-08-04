<?php

namespace daoImpl;

use dao\IRegistrationClassroomDAO,
    dmapimpl\DAO;
use entities\Registration;

use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IRegistrationClassroomDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 *Description of RegistrationClassroomDAO
 *
 * @@author Xlencia
 * @Implement the data access object's interface of RegistrationClassroom entity
 */
 
class RegistrationClassroomDAO extends DAO implements IRegistrationClassroomDAO {

    public function __construct() {
        parent::__construct(Registration::class);

    }
    
    /**
     * @param $acyearId
     * @return ArrayCollection
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getAllByYear($acyearId) {
        $datalist = new ArrayCollection();
        return $datalist;
    }

    public function unregistration($pk) {
        $registrationTable = $this->em->getClassMetadata(Registration::class)->getTableName();
        $stmt = $this->em->getConnection()->query('DELETE FROM ' . $registrationTable . ' WHERE id = ' . $pk);
    }

//put your code here
}
