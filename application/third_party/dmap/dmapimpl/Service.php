<?php

namespace dmapimpl;

use dmapimpl\DAO,
    idmap\IService;

require_once APPPATH . 'third_party/dmap/dmapimpl/DAO.php';
require_once APPPATH . 'third_party/dmap/idmap/IService.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * implémente l'interface IService
 *
 * @author amen
 */
class Service implements IService {

    private $dao;

    public function __construct($entity) {
        $this->dao = new DAO($entity);
    }

    public function count() {
        return $this->dao->count();
    }

    public function size(){
        return $this->dao->size();
    }

    public function deleteAll() {
        $this->dao->deleteAll();
    }
    
    public function deleteAllByEntity($entity) {
        $this->dao->deleteAllByEntity($entity);
    }

    public function deleteOne($entity) {
        return $this->dao->deleteOne($entity);
    }

    public function deleteOneById($pk) {
        $this->dao->deleteOneById($pk);
    }

    public function deleteStateAll() {
        
    }

    public function deleteStateOne($entity) {
        
    }

    public function deleteStateOneById($pk) {
        
    }

    public function executeQuery($query) {
        $this->dao->executeQuery($query);
    }

    public function executeUpdate($query) {
        return $this->dao->executeUpdate($query);
    }

    public function getAll() {
        return $this->dao->getAll();
    }

    public function getAllWithSortAndOrder($sortProperty, $sortAsc) {
        return $this->dao->getAllWithSortAndOrder($sortProperty, $sortAsc);
    }

    public function getAllWithArraySort($sortPropertyInfosCollection) {
        return $this->dao->getAllWithArraySort($sortPropertyInfosCollection);
    }

    public function getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection) {
        return $this->dao->getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection);
    }

    public function getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc) {
        return $this->dao->getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc);
    }
    
    public function getLast(){
        return $this->dao->getLast();
    }
    
    public function getLastId(){
        return $this->dao->getLastId();
    }

    public function getOne($pk) {
        return $this->dao->getOne($pk);
    }
    
    public function getOneExist($entity) {
        return $this->dao->getOneExist($entity);
    }
    
    public function getMany($pks){
        return $this->dao->getMany($pks);
    }

    public function saveAll($entities) {
        $this->dao->saveAll($entities);
    }

    public function saveOne($entity) {
        $this->dao->saveOne($entity);
    }

    public function updateOne($entity) {
        return $this->dao->updateOne($entity);
    }

    public function updateOneById($pk) {
        $this->dao->updateOneById($pk);
    }

    public function getDao() {
        return $this->dao;
    }

    public function setDao($dao) {
        $this->dao = $dao;
    }

    public function activated($pk) {
        
    }

    public function desactivated($pk) {
        
    }

    public function getActivated() {
        
    }

    public function getCurrent() {
        
    }

//put your code here
}
