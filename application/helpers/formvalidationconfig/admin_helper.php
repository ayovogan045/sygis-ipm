<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('AcademicYearFormValidationConfig')) {

    function AcademicYearFormValidationConfig() {

        return array(
            array(
                'field' => 'academicyearwording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'academicyearcode',
                'label' => 'Code d\'identification',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('FeeFormValidationConfig')) {

    function FeeFormValidationConfig() {

        return array(
            array(
                'field' => 'feeamount',
                'label' => 'Montant',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
//            array(
//                'field' => 'feeclassunit',
//                'label' => 'Classe',
//                'rules' => 'required',
//                'errors' => array(
//                    'required' => 'le champ %s est obligatoire.',
//                ),
//            ),
            array(
                'field' => 'feetype',
                'label' => 'Type de frais',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('BlockPaymentFormValidationConfig')) {

    function BlockPaymentFormValidationConfig() {

        return array(
            array(
                'field' => 'blockpaymentdelay',
                'label' => 'Delais',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'blockpaymentdescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
            
        );
    }

}

if (!function_exists('StepPaymentFormValidationConfig')) {

    function StepPaymentFormValidationConfig() {

        return array(
            array(
                'field' => 'stepnumber',
                'label' => 'Nombre de tranches',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'steppaymentdelay',
                'label' => 'Delais',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'steppaymentdescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
            
        );
    }

}

if (!function_exists('FreePaymentFormValidationConfig')) {

    function FreePaymentFormValidationConfig() {

        return array(
            array(
                'field' => 'freepaymentdelay',
                'label' => 'Delais',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'freepaymentdescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
            
        );
    }

}

if (!function_exists('SubventionFormValidationConfig')) {

    function SubventionFormValidationConfig() {

        return array(
            array(
                'field' => 'subventiondelay',
                'label' => 'Delais',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'subventiondescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
            
        );
    }

}

if (!function_exists('RoleFormValidationConfig')) {

    function RoleFormValidationConfig() {

        return array(
            array(
                'field' => 'rolewording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'roledescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('UserFormValidationConfig')) {

    function UserFormValidationConfig() {

        return array(
            array(
                'field' => 'login',
                'label' => 'Pseudo',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Mot de passe',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
//            array(
//                'field' => 'staff',
//                'label' => 'Personnel',
//                'rules' => 'required',
//                'errors' => array(
//                    'required' => 'le champ %s est obligatoire.',
//                ),
//            ),
//            array(
//                'field' => 'Poles',
//                'label' => 'Roles',
//                'rules' => 'required',
//                'errors' => array(
//                    'required' => 'le champ %s est obligatoire.',
//                ),
//            )
        );
    }

}