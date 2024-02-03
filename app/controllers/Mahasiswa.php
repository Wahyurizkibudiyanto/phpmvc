<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['Judul'] = 'Daftar Mahasiswa';
        $this->view('templates/header');
        $this->view('mahasiswa/index');
        $this->view('templates/header');
    }
}
