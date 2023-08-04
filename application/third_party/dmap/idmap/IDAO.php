<?php

namespace idmap;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\ORM\Query;

/**
 *interface DAO
 * @author amen
 */
interface IDAO {

    public function count();
    
    public function size();

    public function deleteAll();
    
    public function deleteAllByEntity($entity);

    public function deleteOne($entity);

    public function deleteOneById($pk);

    public function deleteStateAll($field);

    public function deleteStateOne($entity);

    public function deleteStateOneById($pk);
    
    public function getAll();

    public function getAllWithSortAndOrder($sortProperty, $sortAsc);

    public function getAllWithFirstAndSortAndOrder($first, $count, $sortProperty, $sortAsc);

    public function getAllWithFirstAndArraySort($first, $count, $sortPropertyInfosCollection);

    public function getAllWithArraySort($sortPropertyInfosCollection);

    public function getLast();
    
    public function getLastId();
    
    public function getOne($pk);
    
    public function getOneExist($entity);
    
    public function getMany($pks);

    public function saveAll($entities);

    public function saveOne($entity);

    public function updateOne($entity);
    
    public function updateOneById($pk);

    public function executeQuery(Query $query);

    public function executeUpdate(Query $query);
    
    public function getCurrent();
    
    public function getActivated();
    
    public function activated($pk);
    
    public function desactivated($pk);
}
