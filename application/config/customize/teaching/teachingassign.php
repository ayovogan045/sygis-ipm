<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//semester
$config['semesterform'] = array(
    //form fields
    "semesterformname" => "semesterform",
    "addsemester" => "addsemester",
    "semestershortwording" => "semestershortwording",
    "semestermediumwording" => "semestermediumwording",
    "semesterlongwording" => "semesterlongwording",
    "semesteracademicyear" => "semesteracademicyear",
    "semesteractivated" => "semesteractivated",
    //form and table labels
    "num" => "N°",
    "semestershortwordinglabel" => "Libellé court",
    "semestermediumwordinglabel" => "Libellé moyen",
    "semesterlongwordinglabel" => "Libellé Long",
    "semesteracademicyearlabel" => "Année scolaire",
    "semesteractivatedlabel" => "Activé?",
    //form descriptions  
    "semestershortwordingdesc" => "Le libellé court",
    "semestermediumwordingdesc" => "Le libellé moyen",
    "semesterlongwordingdesc" => "Le libellé Long",
    "semesteracademicyeardesc" => "L'année scolaire",
    "semesteractivateddesc" => "Activé?",
    //form ids  
    "semestershortwordingid" => "semestershortwordingid",
    "semestermediumwordingid" => "semestermediumwordingid",
    "semesterlongwordingid" => "semesterlongwordingid",
    "semesteracademicyearid" => "semesteracademicyearid",
    "semesteractivatedid" => "semesteractivatedid",
    //form links
    "semesteractivatedlink" => "teaching/SemesterController/active_semester",
    "semesterdesactivatedlink" => "teaching/SemesterController/desactive_semester"
);

$config['lessonunittypeform'] = array(
    //form fields
    "lessonunittypeformname" => "lessonunittypeform",
    "addlessonunittype" => "addlessonunittype",
    "lessonunittypewording" => "lessonunittypewording",
    "lessonunittypecode" => "lessonunittypecode",
    //form and table labels
    "num" => "N°",
    "lessonunittypewordinglabel" => "Libellé",
    "lessonunittypecodelabel" => "Code",
    //form descriptions  
    "lessonunittypewordingdesc" => "le libellé",
    "lessonunittypecodedesc" => "le code",
    //form ids  
    "lessonunittypewordingid" => "lessonunittypewordingid",
    "lessonunittypecodeid" => "lessonunittypecodeid",
    //form links
    "lessonunittypeeditedlink" => "teaching/LessonUnitTypeController/edit_lessonunittype",
    "lessonunittypedeletedlink" => "teaching/LessonUnitTypeController/delete_lessonunittype"
);

$config['lessonunitmentionform'] = array(
    //form fields
    "lessonunitmentionformname" => "lessonunitmentionform",
    "addlessonunitmention" => "addlessonunitmention",
    "lessonunitmentionwording" => "lessonunitmentionwording",
    "lessonunitmentioncode" => "lessonunitmentioncode",
    //form and table labels
    "num" => "N°",
    "lessonunitmentionwordinglabel" => "Libellé",
    "lessonunitmentioncodelabel" => "Code",
    //form descriptions  
    "lessonunitmentionwordingdesc" => "le libellé",
    "lessonunitmentioncodedesc" => "le code",
    //form ids  
    "lessonunitmentionwordingid" => "lessonunitmentionwordingid",
    "lessonunitmentioncodeid" => "lessonunitmentioncodeid",
    //form links
    "lessonunitmentioneditedlink" => "teaching/LessonUnitMentionController/edit_lessonunitmention",
    "lessonunitmentiondeletedlink" => "teaching/LessonUnitMentionController/delete_lessonunitmention"
);

//lessonunit
$config['lessonunitform'] = array(
    //form fields
    "lessonunitformname" => "lessonunitform",
    "addlessonunit" => "addlessonunit",
    "codeue" => "codeue",
    "lessonunitmediumwording" => "lessonunitmediumwording",
    "lessonunitlongwording" => "lessonunitlongwording",
    "lessonunittype" => "lessonunittype",
    "lessonunitspeciality" => "lessonunitspeciality",
    //form and table labels
    "num" => "N°",
    "codeuelabel" => "Code UE",
    "lessonunitmediumwordinglabel" => "Libellé moyen",
    "lessonunitlongwordinglabel" => "Libellé Long",
    "lessonunittypelabel" => "Catégorie UE",
    "lessonunitspecialitylabel" => "Spécialité",
    //form descriptions  
    "codeuedesc" => "Le libellé court",
    "lessonunitmediumwordingdesc" => "Le libellé moyen",
    "lessonunitlongwordingdesc" => "Le libellé Long",
    "lessonunittypedesc" => "La catégorie de l'UE",
    "lessonunitspecialitydesc" => "La spécialité de l'UE",
    //form ids  
    "codeueid" => "codeueid",
    "lessonunitmediumwordingid" => "lessonunitmediumwordingid",
    "lessonunitlongwordingid" => "lessonunitlongwordingid",
    "lessonunittypeid" => "lessonunittypeid",
    "lessonunitspecialityid" => "lessonunitspecialityid",
    //form links
    "lessonuniteditedlink" => "teaching/LessonUnitController/edit_lessonunit",
    "lessonunitdeletedlink" => "teaching/LessonUnitController/delete_lessonunit"
);

