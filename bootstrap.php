<?php
// bootstrap.php
// Include Composer Autoload (relative to project root).
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/entities");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'admin',
    'password' => 'w4xwjryk',
    'dbname'   => 'database_b',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null,null,false);
$entityManager = EntityManager::create($dbParams, $config);
