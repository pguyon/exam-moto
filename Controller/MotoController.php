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
}
