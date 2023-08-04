<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('CountryFormValidationConfig')) {

    function CountryFormValidationConfig() {

        return array(
            array(
                'field' => 'countrywording',
                'label' => 'Nom',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'countryshortwording',
                'label' => 'Diminutif',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'countrycode',
                'label' => 'Code d\'identification',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'countrynationality',
                'label' => 'Nationalité',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}
if (!function_exists('FeeTypeFormValidationConfig')) {

    function FeeTypeFormValidationConfig() {

        return array(
            array(
                'field' => 'feetypewording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'feetypecode',
                'label' => 'Code d\'identification',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'feetypedescription',
                'label' => 'Information supplémentaire',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('EvaluationTypeFormValidationConfig')) {

    function EvaluationTypeFormValidationConfig() {

        return array(
            array(
                'field' => 'evaluationtypewording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'evaluationtypecode',
                'label' => 'Code d\'identification',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'evaluationtypedescription',
                'label' => 'Information supplémentaire',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('LessonUnitTypeFormValidationConfig')) {

    function LessonUnitTypeFormValidationConfig() {

        return array(
            array(
                'field' => 'lessonunittypewording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'lessonunittypecode',
                'label' => 'Code d\'identification',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'lessonunittypedescription',
                'label' => 'Information supplémentaire',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('GenderFormValidationConfig')) {

    function GenderFormValidationConfig() {

        return array(
            array(
                'field' => 'genderlongwording',
                'label' => 'Libellé long',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'gendermediumwording',
                'label' => 'Libellé moyen',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'gendershortwording',
                'label' => 'Libellé court',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

//ClassUnit
if (!function_exists('ClassUnitFormValidationConfig')) {

    function ClassUnitFormValidationConfig() {

        return array(
            array(
                'field' => 'classunitlongwording',
                'label' => 'Libellé long',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'classunitmediumwording',
                'label' => 'Libellé moyen',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'classunitshortwording',
                'label' => 'Libellé court',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ), 
            array(
                'field' => 'classunitdescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('PostTypeFormValidationConfig')) {

    function PostTypeFormValidationConfig() {

        return array(
            array(
                'field' => 'posttypewording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'posttypecode',
                'label' => 'Code',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'posttypedescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('PostFormValidationConfig')) {

    function PostFormValidationConfig() {

        return array(
            array(
                'field' => 'postwording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'postcode',
                'label' => 'Code',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'postdescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('LessonUnitMentionFormValidationConfig')) {

    function LessonUnitMentionFormValidationConfig() {

        return array(
            array(
                'field' => 'lessonunitmentionwording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'lessonunitmentioncode',
                'label' => 'Code',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'lessonunitmentiondescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('LevelFormValidationConfig')) {

    function LevelFormValidationConfig() {

        return array(
            array(
                'field' => 'levelwording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'levelcode',
                'label' => 'Code',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'leveldescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('GradeFormValidationConfig')) {

    function GradeFormValidationConfig() {

        return array(
            array(
                'field' => 'gradewording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'gradecode',
                'label' => 'Code',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'gradedescription',
                'label' => 'Description',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('CityFormValidationConfig')) {

    function CityFormValidationConfig() {

        return array(
            array(
                'field' => 'citywording',
                'label' => 'Nom',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'citydescription',
                'label' => 'Information supplémentaire',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'citycountry',
                'label' => 'Pays',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('SchoolFormValidationConfig')) {

    function SchoolFormValidationConfig() {

        return array(
            array(
                'field' => 'schoolwording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'schoolcode',
                'label' => 'Code d\'identification',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}

if (!function_exists('GroupFormValidationConfig')) {

    function GroupFormValidationConfig() {

        return array(
            array(
                'field' => 'groupwording',
                'label' => 'Libellé',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                )
            )
        );
    }

}

if (!function_exists('ClassroomFormValidationConfig')) {

    function ClassroomFormValidationConfig() {

        return array(
            array(
                'field' => 'classunit',
                'label' => 'Classe',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            ),
            array(
                'field' => 'group',
                'label' => 'Group',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'le champ %s est obligatoire.',
                ),
            )
        );
    }

}
