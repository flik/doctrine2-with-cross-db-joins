<?php
// bootstrap.php
// replace with file to your own project bootstrap
require_once 'bootstrap.php';


// replace with mechanism to retrieve EntityManager in your app
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
