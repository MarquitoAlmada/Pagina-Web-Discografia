<?php

if (!isset($_SESSION)) {
    session_start();
}

class Conn
{
    public $bd;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "spinetta";
        $username = "root";
        $password = "";

        try {
            $this->bd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}