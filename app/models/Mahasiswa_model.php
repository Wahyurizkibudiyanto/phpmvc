<?php

class Mahasiswa_model
{

    public function getAllMahasiswa() //methot
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute(); //mulai eksekusi
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); //tangkap araynya dan jadikan asosiatif
    }
}
