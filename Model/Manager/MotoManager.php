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

    public function createMoto(Moto $moto)
    {
        $query = $this->bdd->prepare("INSERT INTO moto (marque, model, type, image) VALUES (:marque, :model, :type, :image)");
        $query->execute([
            'marque' => $moto->getMarque(),
            'model' => $moto->getModel(),
            'type' => $moto->getType(),
            'image' => $moto->getImage(),
        ]);
    }
}
