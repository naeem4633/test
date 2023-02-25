<?php
spl_autoload_register(function ($className){
    
    $path = dirname(__FILE__) . '/' . $className . '.php';

    if(!file_exists($path)){
        return false;
    }
    include_once $path;
});