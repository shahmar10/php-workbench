<?php

session_start();
ob_start();

function loadClasses($className){
    require __DIR__ . '/app/classes/' . $className . '.php';
}

spl_autoload_register('loadClasses');

$config = require __DIR__ . '/config.php';

$db = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['pass'],$config['db']['name']);

require __DIR__ . '/settings.php';

//Helper cagir
foreach(glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile;
}