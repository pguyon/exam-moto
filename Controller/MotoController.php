<?php

class MotoController
{
    private $motoManager;

    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }

    public function listMoto()
    {
        $moto = $this->motoManager->getAllMoto();
        require 'Vue/moto/list.php';
    }




    public function addMoto()
    {
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $result = $this->uploadFile();
            $fileUrl = null;
            if ($result['success']) {
                $fileUrl = $result['file_name'];
            } else {
                $errors[] = $result['errors'];
            }

            if (empty($_POST['marque'])) {
                $errors[] = 'Veuillez entrez la marque de la moto';
            }
            if (empty($_POST['model'])) {
                $errors[] = 'Veuillez entrez le modèle de la moto';
            }
            if (empty($_POST['type'])) {
                $errors[] = 'Veuillez choisir le type de la moto';
            }

            if (count($errors) == 0) {
                $moto = new Moto($_POST['marque'], $_POST['model'], $_POST['type'], $fileUrl);

                $this->motoManager->createMoto($moto);

                header('Location: index.php?controller=admin&action=administration');
                exit();
            }
        }


        require 'Vue/moto/addmoto.php';
    }




    public function uploadFile()
    {
        $errors = [];

        $uploadExtension = [
            'image/jpeg',
            'image/png',
        ];
        if ($_FILES['image']['error'] != 0) {
            $errors[] = 'Erreur lors de l\'upload';
        }

        if (!in_array($_FILES['image']['type'], $uploadExtension)) {
            $errors[] = 'Format de l\'image incorrect';
        }

        if ($_FILES['image']['size'] > 1000000) {
            $errors[] = 'Taille de l\'image trop grande';
        }

        if (count($errors) == 0) {
            $name = uniqid() . '.' . explode('/', $_FILES['image']['type'])[1];

            move_uploaded_file($_FILES['image']['tmp_name'], 'Public/upload/' . $name);
            return ['success' => true, 'file_name' => 'Public/upload/' . $name];
        } else {
            return ['success' => false, 'errors' => $errors];
        }
    }
}
