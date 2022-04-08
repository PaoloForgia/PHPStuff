<?php

class DatabaseConnection extends PDO
{
    private string $username = "paoloforgia";
    private string $password = "8Y=L(V";
    private string $hostname = "localhost";
    private string $dbname = "paoloforgia";

    public function __construct()
    {
        try {
            parent::__construct("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}