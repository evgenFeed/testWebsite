<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->initDatabaseMaps(array (
  'mydb' => 
  array (
    0 => '\\Map\\ClientTableMap',
  ),
));
