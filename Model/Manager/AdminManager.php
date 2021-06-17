<?php

class AdminManager extends dbConnect
{

    public function __construct()
    {
        parent::__construct();
    }


    public function userLogin()
    {
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
}
