<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController/welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/* customs routes */
$route['home'] = 'HomeController/welcome';

$route['login'] = 'HomeController/login';

$route['dashboard'] = 'HomeController/dashboard';

/* basedata routes */
/* locality routes */
/* country */
$route['country'] = 'basedata/locality/CountryController/country';
$route['addcountry'] = 'basedata/locality/CountryController/add_country';
/* city*/
$route['city'] = 'basedata/locality/CityController/city';
$route['addcity'] = 'basedata/locality/CityController/add_city';

/* parameter routes */
/* feetype */
$route['feetype'] = 'basedata/parameter/FeeTypeController/feetype';
$route['addfeetype'] = 'basedata/parameter/FeeTypeController/add_feetype';
/* fee */
$route['fee'] = 'basedata/parameter/FeeController/fee';
$route['addfee'] = 'basedata/parameter/FeeController/add_fee';
/* evaluationtype*/
$route['evaluationtype'] = 'basedata/parameter/EvaluationTypeController/evaluationtype';
$route['addevaluationtype'] = 'basedata/parameter/EvaluationTypeController/add_evaluationtype';

/* schoolparam routes */
/* group */
$route['group'] = 'basedata/schoolparam/GroupController/group';
$route['addgroup'] = 'basedata/schoolparam/GroupController/add_group';
/* grade*/
$route['grade'] = 'basedata/schoolparam/GradeController/grade';
$route['addgrade'] = 'basedata/schoolparam/GradeController/add_grade';
/* grade*/
$route['mention'] = 'basedata/schoolparam/MentionController/mention';
$route['addmention'] = 'basedata/schoolparam/MentionController/add_mention';
/* grade*/
$route['speciality'] = 'basedata/schoolparam/SpecialityController/speciality';
$route['addspeciality'] = 'basedata/schoolparam/SpecialityController/add_speciality';
/* classunit*/
$route['classunit'] = 'basedata/schoolparam/ClassUnitController/classunit';
$route['addclassunit'] = 'basedata/schoolparam/ClassUnitController/add_classunit';
/* classroom*/
$route['classroom'] = 'basedata/schoolparam/ClassRoomController/classroom';
$route['addclassroom'] = 'basedata/schoolparam/ClassRoomController/add_classroom';
/* level */
$route['level'] = 'basedata/schoolparam/LevelController/level';
$route['addlevel'] = 'basedata/schoolparam/LevelController/add_level';
/* school */
$route['school'] = 'basedata/schoolparam/SchoolController/school';
$route['addschool'] = 'basedata/schoolparam/SchoolController/add_school';

/* administration routes */
/* academicyear */
$route['academicyear'] = 'administration/AcademicYearController/academicyear';
$route['addacademicyear'] = 'administration/AcademicYearController/add_academicyear';
/* account */
/* permission */
$route['permission'] = 'administration/account/PermissionController/permission';
$route['addpermission'] = 'administration/account/PermissionController/add_permission';
/* role */
$route['role'] = 'administration/account/RoleController/role';
$route['addrole'] = 'administration/account/RoleController/add_role';
/* user */
$route['user'] = 'administration/account/UserController/user';
$route['adduser'] = 'administration/account/UserController/add_user';

/* inscription routes */
/* candidat */
$route['candidat'] = 'inscription/CandidatController/candidat';
$route['addcandidat'] = 'inscription/CandidatController/add_candidat';
/* validation */
$route['registration'] = 'inscription/RegistrationController/registration';
$route['addregistration'] = 'inscription/RegistrationController/add_registration';

/* teaching routes */
/* semester */
$route['semester'] = 'teaching/SemesterController/semester';
$route['addsemester'] = 'teaching/SemesterController/add_semester';
/* lessonunit type */
$route['lessonunittype'] = 'teaching/LessonUnitTypeController/lessonunittype';
$route['addlessonunittype'] = 'teaching/LessonUnitTypeController/add_lessonunittype';
/* lessonunit mention */
$route['lessonunitmention'] = 'teaching/LessonUnitMentionController/lessonunitmention';
$route['addlessonunitmention'] = 'teaching/LessonUnitMentionController/add_lessonunitmention';
/* lessonunit */
$route['lessonunit'] = 'teaching/LessonUnitController/lessonunit';
$route['addlessonunit'] = 'teaching/LessonUnitController/add_lessonunit';

/* recovery routes */
/* studyfees */
$route['studyfees'] = 'recovery/StudyFeesController/studyfees';
$route['addstudyfees'] = 'recovery/StudyFeesController/add_studyfees';
/* inscriptionfees */
$route['inscriptionfees'] = 'basedata/parameter/FeeController/fee';
$route['addinscriptionfees'] = 'basedata/parameter/FeeController/add_fee';
/* schoolfees*/
$route['schoolfees'] = 'basedata/parameter/EvaluationTypeController/evaluationtype';
$route['addschoolfees'] = 'basedata/parameter/EvaluationTypeController/add_evaluationtype';