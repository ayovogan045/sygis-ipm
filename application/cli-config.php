<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Component\Console\Helper\HelperSet,
    Doctrine\ORM\Tools\Console\ConsoleRunner;


if (!defined('APPPATH')) {
    define('APPPATH', __DIR__ . DIRECTORY_SEPARATOR);
}
if (!defined('BASEPATH')) {
    define('BASEPATH', APPPATH . '/../system/');
}
if (!defined('ENVIRONMENT')) {
    define('ENVIRONMENT', 'development');
}

require BASEPATH . '/libraries/Doctrine.php';

foreach ($GLOBALS as $helperSetCandidate) {
    if ($helperSetCandidate instanceof HelperSet) {
        $helperSet = $helperSetCandidate;
        break;
    }
}

$doctrine = Doctrine::getInstance();

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
//    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($doctrine->getEm()->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($doctrine->getEm())
        ));

ConsoleRunner::run($helperSet);
