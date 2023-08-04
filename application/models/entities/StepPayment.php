<?php

namespace entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * MappedSuperclass
 */

//use Doctrine\Common\Collections\ArrayCollection;

/**
 * StepPayment
 * @author Xlencia
 * @Entity
 * @Table(name="stepPayments")
 * @An abstract objet which represent the datatable of StepPayment in database
 */
class StepPayment extends ModalityPayment implements \Serializable{


}
