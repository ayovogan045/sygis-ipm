<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//permission
$config['permissionform'] = array(
    "num" => "N°",
    "permissionwordinglabel" => "Libellé",
    "permissiondescriptionlabel" => "Description",
);

//Role
$config['roleform'] = array(
    //form fields
    "roleformname" => "roleform",
    "addrole" => "addrole",
    "rolewording" => "rolewording",
    "roledescription" => "roledescription",
    "roleactivated" => "roleactivated",
    "permissions" => "permissions",
    //form and table labels
    "num" => "N°",
    "rolewordinglabel" => "Libellé",
    "roledescriptionlabel" => "Description",
    "roleactivatedlabel" => "Activé?",
    "permissionslabel" => "Permissions",
    //form descriptions  
    "rolewordingdesc" => "le nom du rôle",
    "roledescriptiondesc" => "la description",
    "roleactivateddesc" => "Activé?",
    "permissionsdesc" => "la liste des permissions disponibles",
    //form ids  
    "rolewordingid" => "rolewordingid",
    "roledescriptionid" => "roledescriptionid",
    "roleactivatedid" => "roleactivatedid",
    //form links
    "roleeditedlink" => "administration/account/RoleController/edit_role"
//    "roleactivatedlink" => "administration/account/RoleController/active_role",
//    "roledesactivatedlink" => "administration/account/RoleController/desactive_role"
);

//User
$config['userform'] = array(
    //form fields
    "userformname" => "userform",
    "adduser" => "adduser",
    "lastname" => "lastname",
    "firstname" => "firstname",
    "gender" => "gender",
    "maritalstatus" => "maritalstatus",
    "phone" => "phone",
    "email" => "email",
    "adress" => "adress",
    "birthdate" => "birthdate",
    "bloodgroup" => "bloodgroup",
    "birthcity" => "birthcity",
    "nationality" => "nationality",
    "guardianname" => "guardianname",
    "guardianphone" => "guardianphone",
    "guardianmail" => "guardianmail",
    "picture" => "picture",
    "login" => "login",
    "password" => "password",
    "useractivated" => "useractivated",
    "roles" => "roles",
    //form and table labels
    "num" => "N°",
    "lastnamelabel" => "Nom",
    "firstnamelabel" => "Prénoms",
    "genderlabel" => "Genre",
    "maritalstatuslabel" => "Situation matrimoniale",
    "phonelabel" => "Téléphone",
    "emaillabel" => "Email",
    "adresslabel" => "Adresse",
    "serialnumberlabel" => "Numero matricule",
    "birthdatelabel" => "Date naissance",
    "bloodgrouplabel" => "Group sanguin",
    "birthcitylabel" => "Ville naissance",
    "nationalitylabel" => "Nationalité",
    "guardiannamelabel" => "Nom tuteur",  
    "guardianphonelabel" => "Numero tuteur",
    "guardianmaillabel" => "E-Mail tuteur",
    "picturelabel" => "Photo",
    "loginlabel" => "Pseudo",
    "passwordlabel" => "Mot de passe",
    "useractivatedlabel" => "Activé?",
    "roleslabel" => "Roles",
    //form descriptions  
    "lastnamedesc" => "le noms de l'aprenant",
    "firstnamedesc" => "le prénoms de l'aprenant",
    "genderdesc" => "le sexe",
    "maritalstatusdesc" => "la situation matrimoniale",
    "phonedesc" => "le numéro de téléphone",
    "emaildesc" => "l'adresse mail",
    "adressdesc" => "l'adresse",
    "guardiannamedesc" => "le nom du tuteur",
    "guardianphonedesc" => "le numero du tuteur",
    "guardianmaildesc" => "le mail du tuteur",
    "birthdatedesc" => "Date de Naissance",
    "bloodgroupdesc" => "Group Sanguin",
    "birthcitydesc" => "la ville de naissance",
    "genderdesc" => "le genre",
    "nationalitydesc" => "choisir la nationalité",
    "oldschooldesc" => "Choisir l'établissement de provenance",
    "picturedesc" => "Choisir la photo",
    "logindesc" => "le pseudo",
    "passworddesc" => "le mot de passe",
    "useractivateddesc" => "Activé?",
    "rolesdesc" => "la liste des roles disponibles",
    //form ids  
    "loginid" => "loginid",
    "passwordid" => "passwordid",
    "useractivatedid" => "useractivatedid",
    //form links
    "usereditedlink" => "administration/account/UserController/edit_user"
//    "usereditedlink" => "UserController/edit_user",
//    "userdeletedlink" => "UserController/delete_user"
);
