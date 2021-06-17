<?php
/*spl_autoload_register(function ($class_name) {
    $folders = [
        'Model/Class/',
        'Controller/',
        'Model/Manager/',

    ];
    foreach ($folders as $folder) {
        if (file_exists($folder . $class_name . 'php')) {
            require $folder . $class_name . 'php';
            return;
        }
    }
});*/

require 'Model/Manager/dbConnect.php';
require 'Model/Manager/AdminManager.php';
require 'Model/Manager/MotoManager.php';
require 'Controller/MotoController.php';
require 'Controller/AdminController.php';
