<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct() //koneksi ke databases
    {
        //data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name; //identitas server

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try { //pengecekan koneksi ke databases
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

public function query ($query) {
    $this->stmt = $this->dbh->prepare->($query);
}

public function bind ($param, $value, $type = null);