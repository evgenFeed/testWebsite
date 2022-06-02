<?php
    //require_once '/var/www/html/classes/client.class.php';
    require_once '/var/www/html/vendor/autoload.php';
    require_once '/var/www/html/generated-conf/config.php';

    $smarty = new Smarty();
    $smarty->setTemplateDir("/var/www/html/Smarty/templates");
    $smarty->setConfigDir("/var/www/html/Smarty/config");
    $smarty->setCompileDir("/var/www/html/Smarty/compiler");
    $smarty->setCacheDir("/var/www/html/Smarty/cache");

    $clientQ = new ClientQuery();
    $clients = $clientQ->find();
    $smarty->assign('clients',$clients);
    $smarty->display('/var/www/html/Smarty/templates/databaseStores.tpl');
?>
