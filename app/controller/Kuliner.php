<?php
class Kuliner extends Controller{
    public function index(){
        $data['judul'] = "Kuliner";
        $data['nama']  = $this->model('Jurusan_model')->getKuliner();
        $this->view("templates/header", $data);
        $this->view('jurusan/kuliner', $data);
        $this->view('templates/footer');
    }
}