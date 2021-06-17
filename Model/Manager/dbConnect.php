<?php

abstract class dbConnect
{
    protected $bdd;
    private $host = '127.0.0.1';
    private $dbName = 'exam-moto';
    private $username = 'root';
    private $password = '';

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->username, $this->password, [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur ' . $e->getMessage());
        }
    }
}
