<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data); //merangkai untuk tampilan
        $this->view('home/index', $data);
        $this->view('templates/footer'); //merangkai untuk tampilan
    }
}
