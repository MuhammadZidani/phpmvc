<?php
class Jurusan extends Controller{
    public function index(){
        $data['judul'] = "Jurusan";
        $data['nama']  = $this->model('Jurusan_model')->getJurusan();
        $this->view("templates/header", $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }
}