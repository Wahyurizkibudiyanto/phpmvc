<?php

class Mahasiswa_model
{
    private $dbh; //variabel
    private $stmt; //variabel

    public function __construct() //koneksi ke databases
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc'; //identitas server

        try { //pengecekan koneksi ke databases
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() //methot
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute(); //mulai eksekusi
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); //tangkap araynya dan jadikan asosiatif
    }
}
