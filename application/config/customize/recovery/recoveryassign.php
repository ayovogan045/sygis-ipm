<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//feetype
$config['studyfeesform'] = array(
    //form fields
    "studyfeesformname" => "studyfeesform",
    "addstudyfees" => "addstudyfees",
    "candidat" => "candidat",
    "fee" => "fee",
    //form and table labels
    "num" => "N°",
    "candidatlabel" => "choisir le candidat",
    "feelabel" => "choisir le frais",
    "lastnamelabel" => "Nom",
    "firstnamelabel" => "Prénoms",
    "matriculelabel" => "Numero matricule",
    "adresslabel" => "Adresse",
    "genderlabel" => "Sexe",
    "nationalitylabel" => "Nationalité",
    "phonelabel" => "Téléphone",
    "emaillabel" => "Email",
    //form descriptions  
    "candidatdesc" => "Le candidat",
    "feedesc" => "Le frais",
    //form ids  
    "candidatid" => "candidatid",
    "feeid" => "feeid",
    //form links
    "studyfeesditedlink" => "basedata/parameter/FeeTypeController/edit_feetype",
    "studyfeesletedlink" => "basedata/parameter/FeeTypeController/delete_feetype"
);

//fee
$config['inscriptionfeesform'] = array(
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

