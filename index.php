<?php
session_start();
require 'autoload.php';


if (!isset($_GET['controller']) || !isset($_GET['action'])) {
    header('Location: index.php?controller=moto&action=list');
}



if ($_GET['controller'] == 'moto') {

    $controller = new MotoController();
    if ($_GET['action'] == 'list') {
        $controller->listMoto();
    }

    if ($_GET['action'] == 'add') {
        if (empty($_SESSION) || !$_SESSION['user']) {
            header('Location: index.php?controller=moto&action=list');
        } else {
            $controller->addMoto();
        }
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
        if (empty($_SESSION) || !$_SESSION['user']) {
            header('Location: index.php?controller=moto&action=list');
        } else {
            require 'Vue/admin/administration.php';
        }
    }
}
