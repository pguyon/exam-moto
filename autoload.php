<?php


spl_autoload_register(function ($className) {
    $directorys = array(
        'Model/Class/',

        'Model/Manager/',
        'Controller/',

    );

    foreach ($directorys as $directory) {

        //see if the file exsists
        if (file_exists($directory . $className . '.php')) {
            require_once($directory . $className . '.php');

            return;
        }
    }
});
