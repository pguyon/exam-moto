<?php

class MotoManager extends dbConnect
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllMoto()
    {

        $tableauMoto = [];

        $query = $this->bdd->prepare("SELECT * FROM moto;");
        $query->execute();

        $resultats = $query->fetchAll();


        foreach ($resultats as $resultat) {

            $tableauMoto[] = new Moto($resultat['marque'], $resultat['modele'], $resultat['image'], $resultat['id']);
        }

        return $tableauMoto;
    }

    public function getOneMoto(Moto $moto)
    {
        // TODO
    }
}
