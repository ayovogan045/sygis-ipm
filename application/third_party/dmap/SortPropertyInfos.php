<?php
use SortOrderInfos;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SortPropertyInfo
 *
 * @author amen
 */
class SortPropertyInfos {
    
    private $property;
    private $order;
    
    function __construct($property, $order) {
        $this->property = $property;
        $this->order = $order;
    }

//    public SortPropertyInfos($property) {
//        $this->property = $property;
//        $this->order = SortOrderInfos::none;
//    }
//
//    public SortPropertyInfos(String property, boolean sortAsc) {
//        this.property = property;
//        this.order = sortAsc ? SortOrderInfos.ASCENDING : SortOrderInfos.DESCENDING;
//    }
//
//    public SortPropertyInfos(String property, SortOrderInfos order) {
//        this.property = property;
//        this.order = order;
//    }
//    
    public final function getDQLFragment($prefix) {
        if (this.order == SortOrderInfos.NONE) {
            return "";
        } else if ($this->order == SortOrderInfos::asc) {
            return $prefix . "." . $this->property + " ASC";
        } else {
            return $prefix . "." . $this->property + " DESC";
        }
    }

    function getProperty() {
        return $this->property;
    }

    function getOrder() {
        return $this->order;
    }

    function setProperty($property) {
        $this->property = $property;
    }

    function setOrder($order) {
        $this->order = $order;
    }


}
