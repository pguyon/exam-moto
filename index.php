<?php
session_start();
require 'autoload.php';


/*if (!isset($_GET['controller']) || !isset($_GET['action'])) {
    header('Location: index.php?controller=moto&action=list');
}*/



if ($_GET['controller'] = 'moto') {
    $controller = new MotoController();
    if ($_GET['action'] == 'list') {
        $controller->listMoto();
    }
}


if ($_GET['controller'] == 'admin') {
    $controller = new AdminController();

    if ($_GET['action'] == 'login') {
        $controller->login();
    }
}
