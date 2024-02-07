<?php

class Mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "Wahyu",
            "nip" => "11170631",
            "email" => "wahyu@gmail.com",
            "jurusan" => "Sistem Informasi"
        ],
        [
            "nama" => "Shalsa",
            "nip" => "11170432",
            "email" => "shalsa@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Dody",
            "nip" => "11170213",
            "email" => "dody@gmail.com",
            "jurusan" => "Sistem Informasi"
        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
