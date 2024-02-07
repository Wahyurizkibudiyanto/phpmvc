<?php

class Makul extends Controller
{
    public function index()
    {
        $data['judul'] = 'Mata Kuliah';
        $this->view('templates/header', $data);
        $this->view('makul/index');
        $this->view('templates/footer');
    }
}
