<?php

spl_autoload_register('AutoLoader');

function AutoLoader($className)
{
    $path = '/var/www/html/classes/';
    $extension = '.class.php';
    $fileName = $path . $className . $extension;

    if(!file_exists($fileName))
    {
        return false;
    }

    include_once $path . $className . $extension;
}