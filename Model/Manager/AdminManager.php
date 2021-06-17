<?php

class AdminManager extends dbConnect
{

    public function __construct()
    {
        parent::__construct();
    }


    public function userLogin($username, $password)
    {
        $admin = null;
        $user = $this->checkAdmin($username);

        if ($user) {
            if (password_verify($password,  $user->getPassword())) {
                $admin = $user;
            }
        }
        return $admin;
    }


    public function checkAdmin($username)
    {
        $admin = null;
        $query = $this->bdd->prepare("SELECT * FROM utilisateur WHERE username = :username");
        $query->execute(['username' => $username]);
        $adminProfil = $query->fetch();

        if ($adminProfil) {
            $admin = new Admin(
                $adminProfil['username'],
                $adminProfil['password'],
                $adminProfil['id']
            );
        }
        return $admin;
    }

    public function getAllMoto()
    {

        $tableauMoto = [];

        $query = $this->bdd->prepare("SELECT * FROM moto;");
        $query->execute();

        $resultats = $query->fetchAll();


        foreach ($resultats as $resultat) {

            $tableauMoto[] = new Moto($resultat['marque'], $resultat['model'], $resultat['type'], $resultat['image'], $resultat['id']);
        }

        return $tableauMoto;
    }

    public function getOneMoto($id)
    {
        $moto = null;

        $query = $this->bdd->prepare("SELECT * FROM moto WHERE id = :id");
        $query->execute(['id' => $id]);

        $res = $query->fetch();

        if ($res) {
            $moto = new Moto($res['marque'], $res['model'], $res['type'], $res['image'], $res['id']);
        }

        return $moto;
    }
}
