<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//AcademicYear
$config['academicyearform'] = array(
//form fields
    "academicyearformname" => "academicyearform",
    "addacademicyear" => "addacademicyear",
    "academicyearwording" => "academicyearwording",
    "academicyearcode" => "academicyearcode",
    "academicyearcurrent" => "academicyearcurrent",
//    "checked" => '',
    //form and table labels
    "num" => "N°",
    "academicyearwordinglabel" => "Libellé",
    "academicyearcodelabel" => "Code",
    "academicyearcurrentlabel" => "Activer",
    //form descriptions  
    "academicyearwordingdesc" => "le libellé (expl:Année scolaire 2016-2017)",
    "academicyearcodedesc" => "le code (expl:2016-2017)",
    "academicyearcurrentdesc" => "rendre active l'année scolaire",
    //form links
    "academicyeareditedlink" => "AcademicYearController/edit_academicyear",
    "academicyearactivatedlink" => "AcademicYearController/active_academicyear",
    "academicyeardesactivatedlink" => "AcademicYearController/desactive_academicyear"
);

//Fee
$config['feeform'] = array(
//form fields
    "feeformname" => "feeform",
    "addfee" => "addfee",
    "feeamount" => "feeamount",
    "feeclassunit" => "feeclassunit",
    "feetype" => "feetype",
    //form and table labels
    "num" => "N°",
    "feelabel" => "Libellé",
    "feeamountlabel" => "Montant",
    "feeclassunitlabel" => "Classe",
    "feetypelabel" => "Type de frais",
    //form descriptions  
    "feeamountdesc" => "le montant du frais",
    "feeclassunitdesc" => "la classe",
    "feetypedesc" => "le type de frais",
    //form links
    "feeeditedlink" => "FeeController/edit_fee",
    "feedeletedlink" => "FeeController/delete_fee"
);

//Block payment
$config['blockpaymentform'] = array(
    //form fields
    "blockpaymentformname" => "blockpaymentform",
    "addblockpayment" => "addblockpayment",
    "blockpaymentdelay" => "blockpaymentdelay",
    "blockpaymentdescription" => "blockpaymentdescription",
    //form and table labels
    "num" => "N°",
    "blockpaymentlabel" => "Libellé",
    "blockpaymentdelaylabel" => "Delais",
    "blockpaymentdescriptionlabel" => "Description",
    //form descriptions  
    "blockpaymentdelaydesc" => "le delais de paiement",
    "blockpaymentdescriptiondesc" => "la description de la modalité",
    //form links
    "blockpaymenteditedlink" => "BlockPaymentController/edit_blockpayment",
    "blockpaymentdeletedlink" => "BlockPaymentController/delete_blockpayment"
);

//Step payment
$config['steppaymentform'] = array(
    //form fields
    "steppaymentformname" => "steppaymentform",
    "addsteppayment" => "addsteppayment",
    "stepnumber" => "stepnumber",
    "steppaymentdelay" => "steppaymentdelay",
    "steppaymentdescription" => "steppaymentdescription",
    //form and table labels
    "num" => "N°",
    "steppaymentlabel" => "Libellé",
    "stepnumberlabel" => "Nombre de tranches",
    "steppaymentdelaylabel" => "Delais",
    "steppaymentdescriptionlabel" => "Description",
    //form descriptions  
    "stepnumberdesc" => "le nombre de tranches",
    "steppaymentdelaydesc" => "le delais de paiement",
    "steppaymentdescriptiondesc" => "la description de la modalité",
    //form links
    "steppaymenteditedlink" => "StepPaymentController/edit_steppayment",
    "steppaymentdeletedlink" => "StepPaymentController/delete_steppayment"
);

//Free payment
$config['freepaymentform'] = array(
    //form fields
    "freepaymentformname" => "freepaymentform",
    "addfreepayment" => "addfreepayment",
    "freepaymentdelay" => "freepaymentdelay",
    "freepaymentdescription" => "freepaymentdescription",
    //form and table labels
    "num" => "N°",
    "freepaymentlabel" => "Libellé",
    "freepaymentdelaylabel" => "Delais",
    "freepaymentdescriptionlabel" => "Description",
    //form descriptions  
    "freepaymentdelaydesc" => "le delais de paiement",
    "freepaymentdescriptiondesc" => "la description de la modalité",
    //form links
    "freepaymenteditedlink" => "FreePaymentController/edit_freepayment",
    "freepaymentdeletedlink" => "FreePaymentController/delete_freepayment"
);

//Subvention
$config['subventionform'] = array(
    //form fields
    "subventionformname" => "subventionform",
    "addsubvention" => "addsubvention",
    "subventiondelay" => "subventiondelay",
    "subventiondescription" => "subventiondescription",
    //form and table labels
    "num" => "N°",
    "subventionlabel" => "Libellé",
    "subventiondelaylabel" => "Delais",
    "subventiondescriptionlabel" => "Description",
    //form descriptions  
    "subventiondelaydesc" => "le delais de paiement",
    "subventiondescriptiondesc" => "la description de la modalité",
    //form links
    "subventioneditedlink" => "SubventionController/edit_subvention",
    "subventiondeletedlink" => "SubventionController/delete_subvention"
);

//Role
$config['roleform'] = array(
    //form fields
    "roleformname" => "roleform",
    "addrole" => "addrole",
    "rolewording" => "rolewording",
    "roledescription" => "roledescription",
    "permissions" => "permissions",
    //form and table labels
    "num" => "N°",
    "rolewordinglabel" => "Libellé",
    "roledescriptionlabel" => "Description",
    "permissionslabel" => "Permissions",
    //form descriptions  
    "rolewordingdesc" => "le montant du frais",
    "roledescriptiondesc" => "la description",
    "permissionsdesc" => "la liste des permissions disponibles",
    //form links
    "roleeditedlink" => "RoleController/edit_role",
    "roledeletedlink" => "RoleController/delete_role"
);

//Role
$config['userform'] = array(
    //form fields
    "userformname" => "userform",
    "adduser" => "add_user",
    "login" => "login",
    "password" => "password",
    "activated" => "activated",
    "staff" => "staff",
    "roles" => "roles",
    //form and table labels
    "num" => "N°",
    "loginlabel" => "Pseudo",
    "passwordlabel" => "Mot de passe",
    "activatedlabel" => "Activé",
    "stafflabel" => "Personnel",
    "roleslabel" => "Roles",
    //form descriptions  
    "logindesc" => "le pseudo",
    "passworddesc" => "le mot de passe",
    "activateddesc" => "Activation",
    "staffdesc" => "la liste des personnels disponibles",
    "rolesdesc" => "la liste des roles disponibles",
    //form links
    "usereditedlink" => "UserController/edit_user",
    "userdeletedlink" => "UserController/delete_user"
);
