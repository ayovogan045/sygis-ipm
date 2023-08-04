<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('WorkerFormValidationConfig')) {

    function WorkerFormValidationConfig() {

        return array(
            array(
                'field' => 'lastname',
                'label' => 'Nom',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'firstname',
                'label' => 'Prenom',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'guardianname',
                'label' => 'Nom du tuteur',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'guardianphone',
                'label' => 'Téléphone du tuteur',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'guardianmail',
                'label' => 'Adresse mail du tuteur',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                    'valid_email' => 'Email invalide',
                    'is_unique[users.email]'=>'Email existant'
                ),
            ),
            array(
                'field' => 'adress',
                'label' => 'Adresse',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'birthdate',
                'label' => 'Date de naissance',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'bloodgroup',
                'label' => 'Group sanguin',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'gender',
                'label' => 'Sexe',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'birthcity',
                'label' => 'Ville de naissance',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'nationality',
                'label' => 'Nationalité',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            
        );
    }

}

if (!function_exists('StaffFormValidationConfig')) {

    function StaffFormValidationConfig() {

        return array(
            array(
                'field' => 'startdate',
                'label' => 'date de prise de fonction',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'employee',
                'label' => 'employé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}