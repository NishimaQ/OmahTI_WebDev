<?php

spl_autoload_register(function($class){
    require_once 'Core/' . $class . '.php';
});

$GLOBALS['path'] = '/WebDev/miniframework/public';

function error($err = '404'){
    require_once '../app/Views/err/'.$err.'.php';
    die();
}