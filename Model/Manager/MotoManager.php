<?php

class MotoManager extends dbConnect
{

    public function __construct()
    {
        parent::__construct();
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
