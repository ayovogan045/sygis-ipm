<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$config['groupform'] = array(
    //form fields
    "groupformname" => "groupform",
    "addgroup" => "addgroup",
    "groupwording" => "groupwording",
    //form and table labels
    "num" => "N°",
    "groupwordinglabel" => "Libellé",
    //form descriptions  
    "groupwordingdesc" => "le libellé",
    //form ids  
    "groupwordingid" => "groupwordingid",
    //form links
    "groupeditedlink" => "basedata/schoolparam/GroupController/edit_group",
    "groupdeletedlink" => "basedata/schoolparam/GroupController/delete_group"
);

$config['levelform'] = array(
    //form fields
    "levelformname" => "levelform",
    "addlevel" => "addlevel",
    "levelwording" => "levelwording",
    "levelcode" => "levelcode",
    //form and table labels
    "num" => "N°",
    "levelwordinglabel" => "Libellé",
    "levelcodelabel" => "Code",
    //form descriptions  
    "levelwordingdesc" => "le libellé",
    "levelcodedesc" => "le code",
    //form ids  
    "levelwordingid" => "levelwordingid",
    "levelcodeid" => "levelcodeid",
    //form links
    "leveleditedlink" => "basedata/schoolparam/LevelController/edit_level",
    "leveldeletedlink" => "basedata/schoolparam/LevelController/delete_level"
);

$config['gradeform'] = array(
    //form fields
    "gradeformname" => "gradeform",
    "addgrade" => "addgrade",
    "gradewording" => "gradewording",
    "gradecode" => "gradecode",
    "gradelevel" => "gradelevel",
    //form and table labels
    "num" => "N°",
    "gradewordinglabel" => "Libellé",
    "gradecodelabel" => "Code",
    "gradelevellabel" => "Niveau scolaire",
    //form descriptions  
    "gradewordingdesc" => "le libellé",
    "gradecodedesc" => "le code",
    "gradeleveldesc" => "le niveau scolaire",
    //form ids  
    "gradewordingid" => "gradewordingid",
    "gradecodeid" => "gradecodeid",
    "gradelevelid" => "gradelevelid",
    //form links
    "gradeeditedlink" => "basedata/schoolparam/GradeController/edit_grade",
    "gradedeletedlink" => "basedata/schoolparam/GradeController/delete_grade"
);

$config['mentionform'] = array(
    //form fields
    "mentionformname" => "mentionform",
    "addmention" => "addmention",
    "mentionwording" => "mentionwording",
    "mentioncode" => "mentioncode",
    "mentiongrade" => "mentiongrade",
    //form and table labels
    "num" => "N°",
    "mentionwordinglabel" => "Libellé",
    "mentioncodelabel" => "Code",
    "mentiongradelabel" => "Programme",
    //form descriptions  
    "mentionwordingdesc" => "le libellé",
    "mentioncodedesc" => "le code",
    "mentiongradedesc" => "le programme",
    //form ids  
    "mentionwordingid" => "mentionwordingid",
    "mentioncodeid" => "mentioncodeid",
    "mentiongradeid" => "mentiongradeid",
    //form links
    "mentioneditedlink" => "basedata/schoolparam/MentionController/edit_mention",
    "mentiondeletedlink" => "basedata/schoolparam/MentionController/delete_mention"
);

$config['specialityform'] = array(
    //form fields
    "specialityformname" => "specialityform",
    "addspeciality" => "addspeciality",
    "specialitywording" => "specialitywording",
    "specialitycode" => "specialitycode",
    "specialitymention" => "specialitymention",
    //form and table labels
    "num" => "N°",
    "specialitywordinglabel" => "Libellé",
    "specialitycodelabel" => "Code",
    "specialitymentionlabel" => "Mention",
    //form descriptions  
    "specialitywordingdesc" => "le libellé",
    "specialitycodedesc" => "le code",
    "specialitymentiondesc" => "la mention",
    //form ids  
    "specialitywordingid" => "specialitywordingid",
    "specialitycodeid" => "specialitycodeid",
    "specialitylmentionid" => "specialitymentionid",
    //form links
    "specialityeditedlink" => "basedata/schoolparam/SpecialityController/edit_speciality",
    "specialitydeletedlink" => "basedata/schoolparam/SpecialityController/delete_speciality"
);

$config['classunitform'] = array(
    //form fields
    "classunitformname" => "classunitform",
    "addclassunit" => "addclassunit",
    "classunitwording" => "classunitwording",
    "classunitcode" => "classunitcode",
    "classunitlevel" => "classunitlevel",
    //form and table labels
    "num" => "N°",
    "classunitwordinglabel" => "Libellé",
    "classunitcodelabel" => "Code",
    "classunitlevellabel" => "Niveau scolaire",
    //form descriptions  
    "classunitwordingdesc" => "le libellé",
    "classunitcodedesc" => "le code",
    "classunitleveldesc" => "le niveau scolaire",
    //form ids  
    "classunitwordingid" => "classunitwordingid",
    "classunitcodeid" => "classunitcodeid",
    "classunitlevelid" => "classunitlevelid",
    //form links
    "classuniteditedlink" => "basedata/schoolparam/ClassUnitController/edit_classunit",
    "classunitdeletedlink" => "basedata/schoolparam/ClassUnitController/delete_classunit"
);

$config['classroomform'] = array(
    //form fields
    "classroomformname" => "classroomform",
    "addclassroom" => "addclassroom",
    "classroomclassunit" => "classroomclassunit",
    "classroomgroup" => "classroomgroup",
    //form and table labels
    "num" => "N°",
    "classroomlabel" => "Libelé",
    "classroomclassunitlabel" => "Classe",
    "classroomgrouplabel" => "Groupe",
    //form descriptions  
    "classroomclassunitdesc" => "la classe",
    "classroomgroupdesc" => "le groupe",
    //form ids  
    "classroomclassunitid" => "classroomclassunitid",
    "classroomgroupid" => "classroomgroupid",
    //form links
    "classroomeditedlink" => "basedata/schoolparam/ClassRoomController/edit_classroom",
    "classroomdeletedlink" => "basedata/schoolparam/ClassRoomController/delete_classroom"
);

$config['schoolform'] = array(
    //form fields
    "levelformname" => "schoolform",
    "addschool" => "addschool",
    "schoolwording" => "schoolwording",
    "schoolcode" => "schoolcode",
    //form and table labels
    "num" => "N°",
    "schoolwordinglabel" => "Libellé",
    "schoolcodelabel" => "Code",
    //form descriptions  
    "schoolwordingdesc" => "le libellé",
    "schoolcodedesc" => "le code",
    //form ids  
    "schoolwordingid" => "schoolwordingid",
    "schoolcodeid" => "schoolcodeid",
    //form links
    "schooleditedlink" => "basedata/schoolparam/SchoolController/edit_school",
    "schooldeletedlink" => "basedata/schoolparam/SchoolController/delete_school"
);
