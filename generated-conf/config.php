<?php

$serviceContainer = Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion(2);
$serviceContainer->setAdapterClass('mydb', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'classname' => 'Propel\\Runtime\\Connection\\ConnectionWrapper',
  'dsn' => 'mysql:host=34.88.30.221;dbname=mydb',
  'user' => '', //login db
  'password' => '', //password db
  'attributes' =>
  array (
    'ATTR_EMULATE_PREPARES' => false,
    'ATTR_TIMEOUT' => 30,
  ),
  'model_paths' =>
  array (
    0 => 'src',
    1 => 'vendor',
  ),
));
$manager->setName('mydb');
$serviceContainer->setConnectionManager('mydb', $manager);
$serviceContainer->setDefaultDatasource('mydb');
require_once __DIR__ . '/./loadDatabase.php';
