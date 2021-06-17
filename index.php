<?php
session_start();
require 'autoload.php';


if (!isset($_GET['controller']) || !isset($_GET['action'])) {
    header('Location: index.php?controller=admin&action=login');
}



if ($_GET['controller'] == 'moto') {

    $controller = new MotoController();
    if ($_GET['action'] == 'list') {
    }

    if ($_GET['action'] == 'add') {
        if (empty($_SESSION) || !$_SESSION['user']) {
            header('Location: index.php?controller=admin&action=login');
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
            header('Location: index.php?controller=admin&action=login');
        } else {
            $controller->listMoto();
        }
    }
    if ($_GET['action'] == 'motodetail' && isset($_GET['id'])) {
        if (empty($_SESSION) || !$_SESSION['user']) {
            header('Location: index.php?controller=admin&action=login');
        } else {
            $controller->motoDetail($_GET['id']);
        }
    }
    if ($_GET['action'] == 'motodelete' && isset($_GET['id'])) {
        if (empty($_SESSION) || !$_SESSION['user']) {
            header('location: index.php?controller=admin&action=login');
        } else {
            $controller->motoDelete($_GET['id']);
        }
    }
}
