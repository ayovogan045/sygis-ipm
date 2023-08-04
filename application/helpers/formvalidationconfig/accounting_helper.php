<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (!function_exists('InscriptionFormValidationConfig')) {

    function InscriptionFormValidationConfig() {
        return array(
            array(
                'field' => 'amountpaid',
                'label' => 'Montant payé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'amounttopaid',
                'label' => 'Montant à payer',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'resttopaid',
                'label' => 'Reste à payer',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'candidat',
                'label' => 'Candidat',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'fee',
                'label' => 'Frais à payer',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'modalitypayment',
                'label' => 'Modalité de paiement',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}