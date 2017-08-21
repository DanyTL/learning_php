<?php
use \Core\Application;

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $path = sprintf("%s\..\src\%s.php",__DIR__,$className); //string format eg.
    require_once $path;
}

$app = new Application();

$app->handle();