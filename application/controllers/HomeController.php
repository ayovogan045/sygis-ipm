<?php

//use \serviceImpl\PermissionService;

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

use serviceImpl\PermissionService;

require_once 'BaseController.php';
require_once APPPATH . 'third_party/secureauth/build_permission.php';
require_once APPPATH . 'models/serviceImpl/PermissionService.php';

/**
 * @author Xlencia 
 * 
 */
// basic assignment for passing data to template file
class HomeController extends BaseController {

    /**
     * constructor
     */
    public function __construct() {

        parent::__construct();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function index() {

        //picquelist,dualbox php
//        $permissionDetails = $this->config->item('permissions');
//        print_r($permissionDetails);
//
//        $buildPermission = new BuildPermission();
//
//        $permissionService = new PermissionService();
//
//        $permissionService->addPermissions(
//                $buildPermission->buildPermissions('entities\Permission', $permissionDetails));
//
        $this->layout->assignOne('register', anchor('/login_validated', 'S\'enrégistrer', 'class="btn btn-primary"'));
        $this->layout->assignOne('login', 'login_validated');
        $this->layout->assignOne('loginTitle', "Admin");
        $this->layout->assignOne("body", "");
        $this->session->sess_destroy();

        // show the template
        $this->layout->view('login/loginpage.tpl');
    }

    public function welcome() {

        // basic assignment for passing data to template file
//        $this->layout->assignOne('register', anchor('/login_validated', 'S\'enrégistrer', 'class="btn btn-primary"'));
//        $this->layout->assignOne('login', 'login_validated');
//        $this->layout->assignOne('loginTitle', "Admin");
//        $this->layout->assignOne("body","");
//        $this->session->sess_destroy();
//        
//        $permissionDetails = $this->config->item('permissions');
//        $buildPermission = new BuildPermission();
//
//        $permissionService = new PermissionService();
//        $permissionService->addPermissions(
//                $buildPermission->buildPermissions('entities\Permission', $permissionDetails));
//        
        // show the template
        $this->layout->view('login/loginpage.tpl');
    }

    public function login() {
        $permissionDetails = $this->config->item('permissions');
        $id = 0;
        $permissions = array();
        $permissionService = new PermissionService();

        foreach ($permissionDetails as $key => $value) {
            $id += 1;
            $permissions[] = new entities\Permission($id, $key, $value, $this->getNormalStatus());
        }

        $permissionService->addPermissions($permissions);
//                $buildPermission->buildPermissions('entities\Permission', $permissionDetails));

        $this->layout->assignOne('activelink', 'Tableau de bord');
        // show the template
        $this->layout->view('content/dashboard/dashboard.tpl');

//        if (isset($_POST['login']) && isset($_POST['password'])) {
//            $login = htmlspecialchars(trim($_POST['login']));
//            $password = htmlspecialchars(trim($_POST['password']));
//
//            $usersService = new UsersService();
//
//            /** @var \entities\Users $user */
//            $user = $usersService->getOneByLogin($login);
//
//            if ($user !== null) {
//
//                if ($user->getPassword() === $password) {
//
//                    $_SESSION["userId"] = $user->getId();
//
//                    $usersRoles = $user->getUser_roles();
//
//                    $userPermissions = "";
//
//                    foreach ($usersRoles as $userRole) {
//
//                        $rolePermissions = $userRole->getRole()->getRole_permissions();
//
//                        foreach ($rolePermissions as $rolePermission) {
//
//                            $userPermissions = $userPermissions . " " . $rolePermission->getPermission()->getWording();
//                        }
//                    }
//
//                    $_SESSION["userPermissions"] = $userPermissions;
//
//                    $this->layout->view('dashboard/dashboard.tpl');
//                } else {
//
//                    $this->layout->assignOne('error', 'Mot de passe incorrecte');
//                    $this->layout->assignOne('loginTitle', 'Admin');
//                    $this->layout->view('login/loginpage.tpl');
//                }
//            } else {
//
//                $this->layout->assignOne('error', 'Pseudo et mot de passe incorrecte');
//                $this->layout->assignOne('loginTitle', 'Admin');
//                $this->layout->view('login/loginpage.tpl');
//
//                $this->layout->view('dashboard/dashboard.tpl');
//            }
//        }
    }

    public function dashboard() {
        $this->layout->assignOne('activelink', 'Tableau de bord');
        // show the template
        $this->layout->view('content/dashboard/dashboard.tpl');
    }

}
