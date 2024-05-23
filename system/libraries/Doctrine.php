<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\Common\ClassLoader,
    Doctrine\ORM\Tools\Setup,
//    Doctrine\ORM\EntityRepository,
    Doctrine\ORM\EntityManager;

//use Doctrine\Common\ClassLoader,
//    Doctrine\ORM\Configuration,
//    Doctrine\ORM\EntityManager,
//    Doctrine\Common\Cache\ArrayCache,
//    Doctrine\DBAL\Logging\EchoSQLLogger,
//    Doctrine\ORM\Mapping\Driver\DatabaseDriver,
//    Doctrine\ORM\Tools\DisconnectedClassMetadataFactory,
//    Doctrine\ORM\Tools\EntityGenerator;

class Doctrine {
    /*
     * @var instance unique de la classe
     */

    private static $instance;
    /*
     * @var entity manager
     */
    private $em;

    public function __construct() {
        require_once __DIR__ . '/Doctrine/ORM/Tools/Setup.php';
        Setup::registerAutoloadDirectory(__DIR__);

        // Load the database configuration from CodeIgniter
        require APPPATH . 'config/database.php';

        $connection_options = array(
            'driver' => 'pdo_mysql',
            'user' => $db['default']['username'],
            'password' => $db['default']['password'],
            'host' => $db['default']['hostname'],
            'dbname' => $db['default']['database'],
            'charset' => $db['default']['char_set'],
            'driverOptions' => array(
                'charset' => $db['default']['char_set'],
            ),
        );

        // With this configuration, your model files need to be in application/models/Entity
        // e.g. Creating a new Entity\User loads the class from application/models/Entity/User.php
        $models_namespace = 'entities';
        $models_path = APPPATH . 'models';
        $proxies_dir = APPPATH . 'models/proxies';
        $metadata_paths = array(APPPATH . 'models');
        // Set $dev_mode to TRUE to disable caching while you develop
//        $dev_mode = true;
        $application_mode = "development";
        // If you want to use a different metadata driver, change createAnnotationMetadataConfiguration
        // to createXMLMetadataConfiguration or createYAMLMetadataConfiguration.
        $config = Setup::createAnnotationMetadataConfiguration($metadata_paths);
        $config->setProxyNamespace('proxies');
        $config->setAutoGenerateProxyClasses(ENVIRONMENT == 'development');

        if ($application_mode == "development") {
            $config->setAutoGenerateProxyClasses(true);
        } else {
            $config->setAutoGenerateProxyClasses(false);
        }

        if ($application_mode == "development") {
            $cache = new \Doctrine\Common\Cache\ArrayCache;
        } else {
            $cache = new \Doctrine\Common\Cache\ApcCache;
        }
        $config->setQueryCacheImpl($cache);

        $config->setQueryCacheImpl($cache);

        $config->setProxyDir($proxies_dir);
        $this->em = EntityManager::create($connection_options, $config);
        $loader = new ClassLoader($models_namespace, $models_path);
        $loader->register();
        $tool = new \Doctrine\ORM\Tools\SchemaTool($this->em);
        $classes = array(
            $this->em->getClassMetadata('entities\AcademicYear'),
            $this->em->getClassMetadata('entities\Agreement'),
            $this->em->getClassMetadata('entities\Candidat'),
            $this->em->getClassMetadata('entities\Category'),
            $this->em->getClassMetadata('entities\City'),
            $this->em->getClassMetadata('entities\Classroom'),
            $this->em->getClassMetadata('entities\Classunit'),
            $this->em->getClassMetadata('entities\ClassunitFee'),
            $this->em->getClassMetadata('entities\Country'),
            $this->em->getClassMetadata('entities\Course'),
            $this->em->getClassMetadata('entities\Cursus'),
            $this->em->getClassMetadata('entities\Evaluation'),
            $this->em->getClassMetadata('entities\EvaluationType'),
            $this->em->getClassMetadata('entities\Fee'),
            $this->em->getClassMetadata('entities\Feetype'),
            $this->em->getClassMetadata('entities\Gender'),
            $this->em->getClassMetadata('entities\Grade'),
            $this->em->getClassMetadata('entities\Job'),
            $this->em->getClassMetadata('entities\JobType'),
            $this->em->getClassMetadata('entities\Lessonunit'),
            $this->em->getClassMetadata('entities\LessonunitType'),
//            $this->em->getClassMetadata('entities\LessonunitMention'),
            $this->em->getClassMetadata('entities\Level'),
            $this->em->getClassMetadata('entities\Mark'),
            $this->em->getClassMetadata('entities\Mention'),
            $this->em->getClassMetadata('entities\ModalityPayment'),
            $this->em->getClassMetadata('entities\Inscription'),
            $this->em->getClassMetadata('entities\Payment'),
            $this->em->getClassMetadata('entities\Permission'),
            $this->em->getClassMetadata('entities\Personinfo'),
            $this->em->getClassMetadata('entities\Post'),
            $this->em->getClassMetadata('entities\Posttype'),
            $this->em->getClassMetadata('entities\Receipt'),
            $this->em->getClassMetadata('entities\Registration'),
            $this->em->getClassMetadata('entities\RegistrationClassroom'),
            $this->em->getClassMetadata('entities\RegistrationCourse'),
            $this->em->getClassMetadata('entities\Role'),
            $this->em->getClassMetadata('entities\RolePermission'),
            $this->em->getClassMetadata('entities\Salary'),
            $this->em->getClassMetadata('entities\Scheduler'),
            $this->em->getClassMetadata('entities\Semester'),
            $this->em->getClassMetadata('entities\School'),
            $this->em->getClassMetadata('entities\Speciality'),
            $this->em->getClassMetadata('entities\Exam'),
            $this->em->getClassMetadata('entities\Staff'),
            $this->em->getClassMetadata('entities\StaffPost'),
            $this->em->getClassMetadata('entities\Users'),
            $this->em->getClassMetadata('entities\UsersRole'),
            $this->em->getClassMetadata('entities\Worker')
        );
        $tool->updateSchema($classes, TRUE);
    }

    // méthode singleton
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Doctrine();
        }
        return self::$instance;
    }

    function getEm() {
        return $this->em;
    }

    function setEm($em) {
        $this->em = $em;
    }

}
