<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CRUD {
    

    function __construct() {
        
    }
//    
//    function __construct($service) {
//        $this->service = $service;
//    }

    public function create($service, $entity) {
        $service->saveOne($entity);
    }
    
    public function createAll($service, $entities) {
        $service->saveAll($entities);
    }

    public function deleteOne($service, $id, $state) {
        $entity = $service->getOne($id);
        $entity->setState($state);
        return $service->updateOne($entity);
    }
    
    public function deleteAllByEntity($service, $entity) {
        return $service->deleteAllByEntity($entity);
    }

    public function read($service) {
        return $service->getAll();
    }

    public function size($service) {
        return $service->size();
    }

    public function readSortAsc($service, $sortProperty) {
        return $service->getAllWithSortAndOrder($sortProperty, "ASC");
    }

    public function readSortDesc($service, $sortProperty) {
        return $service->getAllWithSortAndOrder($sortProperty, "DESC");
    }

    public function updateOne($service, $entity) {
        return $service->updateOne($entity);
    }

    public function findOne($service, $id) {
        return $service->getOne($id);
    }
    
    public function findLast($service) {
        return $service->getLast();
    }

    public function findAll($service, $ids) {
        return $service->getMany($ids);
    }

    public function buildEntityObjectList($service) {
        $list = $this->read($service);
        $data = new \ArrayIterator();
        foreach ($list as $item) {
            $data->append($service->getOne($item->getId()));
        }

        return $data;
    }

    public function buildEntityObjectListSortAsc($service, $sortProperty) {
        $list = $this->readSortAsc($service, $sortProperty);
        $data = new \ArrayIterator();
        foreach ($list as $item) {
            $data->append($service->getOne($item->getId()));
        }

        return $data;
    }

    public function buildEntityObjectListSortDesc($service, $sortProperty) {
        $list = $this->readSortDesc($service, $sortProperty);
        $data = new \ArrayIterator();
        foreach ($list as $item) {
            $data->append($service->getOne($item->getId()));
        }

        return $data;
    }

    public function buildDataList($list) {

        $data = new \ArrayIterator();
        foreach ($list as $item) {
            $data->append($service->getOne($obj->getId()));
        }
        return $data;
    }

}
