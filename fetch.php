<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
 
$paths = array(__DIR__."/Entities");
//var_dump($paths); exit;
$isDevMode = true;
 
// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'admin',
    'password' => 'w4xwjryk',
    'dbname'   => 'database_a',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null,null,false);
//$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode );

$em = $entityManager = EntityManager::create($dbParams, $config);

 require_once "entities/User.php";
 require_once "entities/Address.php";
 //var_dump(new User()); exit;
$data = $em->getRepository('User');
$datax = $data->findAll();

foreach($datax as $d) {
  echo '<pre>'; \Doctrine\Common\Util\Debug::dump($d);
}
