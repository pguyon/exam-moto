<?php

class Moto
{

    private $id;
    private $marque;
    private $model;
    private $type;
    private $image;

    public function __construct($marque, $model, $type, $image, $id = null)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->model = $model;
        $this->type = $type;
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}
