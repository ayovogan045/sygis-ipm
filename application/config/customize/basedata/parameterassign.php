<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//feetype
$config['feetypeform'] = array(
    //form fields
    "feetypeformname" => "feetypeform",
    "addfeetype" => "addfeetype",
    "feetypewording" => "feetypewording",
    "feetypecode" => "feetypecode",
    "feetypedescription" => "feetypedescription",
    //form and table labels
    "num" => "N°",
    "feetypewordinglabel" => "Libellé",
    "feetypecodelabel" => "Code",
    "feetypedescriptionlabel" => "Description",
    //form descriptions  
    "feetypewordingdesc" => "le libellé",
    "feetypecodedesc" => "le code",
    "feetypedescriptiondesc" => "information supplémentaire",
    //form ids  
    "feetypewordingid" => "feetypewordingid",
    "feetypecodeid" => "feetypecodeid",
    "feetypedescriptionid" => "feetypedescriptionid",
    //form links
    "feetypeeditedlink" => "basedata/parameter/FeeTypeController/edit_feetype",
    "feetypedeletedlink" => "basedata/parameter/FeeTypeController/delete_feetype"
);

//fee
$config['feeform'] = array(
    //form fields
    "feeformname" => "feeform",
    "addfee" => "addfee",
    "feewording" => "feewording",
    "feeamount" => "feeamount",
    "feetype" => "feetype",
    //form and table labels
    "num" => "N°",
    "feewordinglabel" => "Libellé",
    "feeamountlabel" => "Montant",
    "feetypelabel" => "Type de Frais",
    //form descriptions  
    "feewordingdesc" => "Libellé",
    "feeamountdesc" => "Le montant du frais",
    "feetypedesc" => "faites votre choix",
    //form ids  
    "feewordingid" => "feewordingid",
    "feeamountid" => "feeamountid",
    "feetypeid" => "feetypeid",
    //form links
    "feeeditedlink" => "basedata/parameter/FeeController/edit_fee",
    "feedeletedlink" => "basedata/parameter/FeeController/delete_fee"
);

