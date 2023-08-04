<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require_once APPPATH . 'controllers/BaseController.php';

use entities\Users;
use serviceImpl\UserService;
use Doctrine\Common\Collections\ArrayCollection;

require_once APPPATH . 'models/serviceImpl/UserService.php';

/**
 * @property CI_Form_validation fv a class instance of CI_Form_validation
 * It takes into account the constraints defined on each of the form field
 * It returns a warning message if a constraint is not checked
 * 
 * @The controller of User entity 
 * It serves as a bridge between the model and the view
 * 
 * @author Xlencia
 */
class UserController extends BaseController {

    private $userService;
    private $user_datalist;
    private $entity;
    private $wording;
    private $description;

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();

        ini_set('magic_quotes_gpc', 0);

        $this->layout->assignOne('addnewlink', 'administration/account/UserController/newuser');
        $this->layout->assignOne('listlink', 'administration/account/UserController/userlist');
        $this->layout->assignOne('userrolelink', 'administration/account/UserController/userrole');
        $this->layout->assignAll($this->config->item("userform"));

        $this->layout->assignOne('openlink', 'Administration');
        $this->layout->assignOne('activelink', 'Compte');
        $this->layout->assignOne('subactivelink', 'Liste des utilisateurs');

        $this->userService = new UserService();
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function user() {
        $this->layout->assignOne('userdatalist', $this->list_users());
        if ($this->session->userdata('done') === 1) {
            $this->layout->assignOne('success', "Désactivation éffectué avec succès");
        } else if ($this->session->userdata('done') === 0) {
            $this->layout->assignOne('warning', "Désactivation échouée");
        }
        $this->session->set_userdata('done', "");
        $this->editFields($this->session->userdata('user_id'));
        // show the template
        $this->layout->view('content/administration/account/user/userlistpage.tpl');
    }

    /**
     * Default function that will be executed unless another method specified
     */
    public function newuser() {
        if ($this->session->userdata('user_id') != 0) {
            $permissionsForRole = new ArrayCollection($this->permissionService->getAllByRoleIdWithSortAndOrder($this->session->userdata('role_id')));
            $permissiondatalist = new ArrayCollection($this->crud->readSortAsc($this->permissionService, 'wording'));
            foreach ($permissionsForRole as $permission) {
                $permissiondatalist->removeElement($permission);
            }
            $this->layout->assignOne('permissionsForRole', $permissionsForRole);
            $this->layout->assignOne('permissiondatalist', $permissiondatalist);
            $this->editFields($this->session->userdata('role_id'));

            $this->layout->assignOne('addnewlink', '../../../../index.php/administration/account/UserController/newuser');
            $this->layout->assignOne('listlink', '../../../../index.php/administration/account/UserController/userlist');
            $this->layout->assignOne('userrolelink', '../../../../index.php/administration/account/UserController/userrole');
        } else {
            $this->layout->assignOne('addnewlink', '../../../../index.php/administration/account/UserController/newuser');
            $this->layout->assignOne('listlink', '../../../../index.php/administration/account/UserController/userlist');
            $this->layout->assignOne('userrolelink', '../../../../index.php/administration/account/UserController/userrole');
        }
        $this->layout->assignOne('subactivelink', 'Edition des utilisateurs');
        // show the template
        $this->layout->view('content/administration/account/user/userformpage.tpl');
    }

    //Role
    //add a new role to the database
    public function add_user() {
        // getting the differents values of fields
        $this->getPostData();
        //control wich operation can be done. Add or Edit
        if ($this->session->userdata('currentRole') > 0) {
            $this->doUpdate($this->session->userdata('currentRole'));
            $this->session->set_userdata('currentRole', 0);
        } else {
            //create an role object
            $role = new Role($this->getWording(), $this->getDescription(), $this->getNormalStatus());
            if ($this->roleService->getOneExist($role) != NULL) {
                $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            } else {
                //proccess to add a new role to database
                $this->crud->create($this->roleService, $role);
                $currentRole = $this->crud->findLast($this->roleService);
                $rolePermissions = new ArrayCollection();
                foreach ($this->getPermissionlist() as $permission) {
                    $rolePermissions->add(new RolePermission($permission, $currentRole, $this->getNormalStatus()));
                }
                $this->crud->createAll($this->rolePermissionService, $rolePermissions);
                $this->layout->assignOne('success', "Enrégistrement du rôle " . $this->getWording() . ' éffectué avec succès ');
            }
        }
        $this->layout->assignOne('roledatalist', $this->list_users());

        $this->layout->assignOne('addnewlink', '../index.php/administration/account/RoleController/newrole');
        $this->layout->assignOne('listlink', '../index.php/administration/account/RoleController/rolelist');
        $this->layout->assignOne('userrolelink', '../index.php/administration/account/RoleController/userrole');
        // show the template
        $this->layout->view('content/administration/account/role/rolelistpage.tpl');
    }

    //list of user
    public function userlist() {
        $this->layout->assignOne('userdatalist', $this->list_users());

        $this->layout->assignOne('addnewlink', '../../../../index.php/administration/account/UserController/newuser');
        $this->layout->assignOne('listlink', '../../../../index.php/administration/account/UserController/userlist');
        $this->layout->assignOne('userrolelink', '../../../../index.php/administration/account/UserController/userrole');
        // show the template
        $this->layout->view('content/administration/account/user/userlistpage.tpl');
    }

    //edit and update the status of the current role data to the database
    public function edit_user($role_id = 0) {
        $this->entity = $this->crud->findOne($this->roleService, $this->decryptionId($role_id));
        if ($this->entity !== NULL) {
            $this->session->set_userdata('user_id', $this->entity->getId());
            $this->layout->assignOne('warning', "Vous êtes dans un processus de modification de donnée.  "
                    . "Etes vous sûr de vouloir continuer sinon <a href='" . base_url() . "index.php/user'> abandonner</a> ");
            $this->newrole();
        }
    }

//list the user data from the database
    public function list_users() {
        $this->user_datalist = $this->crud->readSortAsc($this->userService, 'login');
        return $this->user_datalist;
    }

    function getPostData() {
        $this->setWording(htmlspecialchars($_POST['rolewording']));
        $this->setDescription(htmlspecialchars($_POST['roledescription']));
        $this->setPermissionlist($this->crud->findAll($this->permissionService, $_POST['permissionselectedlist']));
    }

    function editFields($key) {
        if ($key > 0) {
            $this->entity = $this->crud->findOne($this->roleService, $key);
            $this->keepFields($this->entity);
            $this->session->set_userdata('currentRole', $this->entity->getId());
            $this->session->set_userdata('role_id', 0);
        }
    }

    function keepFields($entity) {
        if ($entity !== NULL) {
            $this->layout->assignOne('rolewordingvalue', $entity->getWording());
            $this->layout->assignOne('roledescriptionvalue', $entity->getDescription());
        }
    }

    function doUpdate($key) {
        $this->entity = $this->crud->findOne($this->roleService, $key);
        $this->entity->setWording($this->getWording());
        $this->entity->setDescription($this->getDescription());
        if ($this->roleService->getOneExist($this->entity) != NULL) {
            $this->layout->assignOne('error', "un enrégistrement avec les mêmes informations existe déjà dans le système");
            $this->session->set_userdata('currentRole', 0);
        } else {
            $this->entity->setState($this->getUpdateStatus());
            $this->crud->updateOne($this->roleService, $this->entity);
//            $this->crud->deleteAllByEntity($this->rolePermissionService, get_Class($this->entity));
            $this->rolePermissionService->deleteAllByRole($this->entity);
            $rolePermissions = new ArrayCollection();
            foreach ($this->getPermissionlist() as $permission) {
                $rolePermissions->add(new RolePermission($permission, $this->entity, $this->getNormalStatus()));
            }
            $this->crud->createAll($this->rolePermissionService, $rolePermissions);
            $this->layout->assignOne('success', 'modification éffectuée avec succès ');
            $this->session->set_userdata('currentRole', 0);
        }
    }

    function getWording() {
        return $this->wording;
    }

    function getDescription() {
        return $this->description;
    }

    function getPermissionlist() {
        return $this->permissionlist;
    }

    function setWording($wording) {
        $this->wording = $wording;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPermissionlist($permissionlist) {
        $this->permissionlist = $permissionlist;
    }

}
