<?php

namespace daoImpl;

use dao\IFeeDAO;
use dmapimpl\DAO;
use daoImpl\FeeTypeDAO;
use daoImpl\ClassUnitDAO;
use entities\Fee;
use entities\ClassUnitFee;
use entities\FeeType;
use entities\ClassUnit;
use Doctrine\Common\Collections\ArrayCollection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once APPPATH . 'models/dao/IFeeDAO.php';
require_once APPPATH . 'models/daoImpl/ClassUnitDAO.php';
require_once APPPATH . 'models/daoImpl/FeeTypeDAO.php';
require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';

/**
 * Description of FeeDAO
 *
 * @author Xlencia
 * @Implement the data access object's interface of Fee entity
 */
class FeeDAO extends DAO implements IFeeDAO {

    //put your code here

    private $feeTypeDAO;
    private $classUnitDAO;

    //put your code here
    public function __construct() {
        parent::__construct(Fee::class);
        $this->feeTypeDAO = new FeeTypeDAO(FeeType::class);
        $this->classUnitDAO = new ClassUnitDAO(ClassUnit::class);
    }

    public function getOneExist($entity) {
        if ($entity != NULL || $entity != "") {
            $query = $this->em->createQuery("SELECT e FROM " . $this->entity . " e, " . FeeType::class . " f WHERE e.state !=1 "
                    . "AND e.wording = " . "'" . $entity->getWording() . "'" . " "
                    . "AND e.amount = " . "'" . $entity->getAmount() . "'" . " "
                    . "AND e.fee_type = " . $entity->getFee_type()->getId());

//                print_r($query->getSql()."".$query->getDql());
            try {
//               
//                print_r($query->getOneOrNullResult());
                return $query->getOneOrNullResult();
            } catch (\Doctrine\ORM\NonUniqueResultException $ex) {
                $ex->getMessage();
            }
            return NULL;
        }
    }

}
