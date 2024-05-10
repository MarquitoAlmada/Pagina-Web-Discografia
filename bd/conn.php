<?php

if (!isset($_SESSION)) {
    session_start();
}

class Conn
{
    public $db;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "spinetta";
        $username = "root";
        $password = "";

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $th) {
            echo "Error: " . $th->getMessage();
        }
    }
}