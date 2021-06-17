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
}
