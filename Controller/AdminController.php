<?php

class AdminController
{
    private $adminManager;

    public function __construct()
    {
        $this->adminManager = new AdminManager();
    }

    public function login()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['username'])) {
                $errors[] = 'Veuillez saisir un username';
            }
            if (empty($_POST['password'])) {
                $errors[] = 'Veuillez saisir un password';
            }
            if (count($errors) == 0) {
                $admin = $this->adminManager->userLogin($_POST['username'], $_POST['password']);
                if ($admin) {
                    $_SESSION['user'] = serialize($admin);
                    header('Location: index.php?controller=admin&action=administration');
                } else {
                    $errors[] = 'Indentifiants incorrects';
                }
            }
        }
        require 'Vue/admin/login.php';
    }


    public function disconnect()
    {
        session_destroy();
        header('location: index.php?controller=admin&action=login');
    }


    public function listMoto()
    {
        $motos = $this->adminManager->getAllMoto();
        require 'Vue/admin/administration.php';
    }


    public function motoDetail($id)
    {
        $moto = $this->adminManager->getOneMoto($id);
        if ($moto != null) {
            require 'Vue/moto/detail.php';
        }
    }
}
