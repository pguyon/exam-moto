<?php
session_start();
require 'autoload.php';


if (!isset($_GET['controller']) || !isset($_GET['action'])) {
    header('Location: index.php?controller=admin&action=login');
}



if ($_GET['controller'] == 'moto') {
    if (empty($_SESSION) || !$_SESSION['user']) {
        header('Location: index.php?controller=moto&action=list');
    }
    $controller = new MotoController();
    if ($_GET['action'] == 'list') {
        $controller->listMoto();
    }
    if ($_GET['action'] == 'add') {
        $controller->addMoto();
    }
}






if ($_GET['controller'] == 'admin') {
    $controller = new AdminController();
    if ($_GET['action'] == 'login') {
        $controller->login();
    }
    if ($_GET['action'] == 'disconnect') {
        $controller->disconnect();
    }

    if ($_GET['action'] == 'administration') {
        require 'Vue/admin/administration.php';
    }
}
