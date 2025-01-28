<?php

spl_autoload_register(function($className) {
    $path = __DIR__ . "/../models/";
    $extension = '.php';
    $fullPath = $path . $className . $extension;

    if(file_exists($fullPath)) {
        require $fullPath;
    } else {
        echo "not found in class " . $className . "in path " . $fullPath;
    }
});

require 'config.php';
require 'Database.php';
require 'functions.php';
require 'Controller.php';
require 'App.php';

