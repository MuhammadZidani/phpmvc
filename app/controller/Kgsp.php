<?php
class Kgsp extends Controller{
    public function index(){
        $data['judul'] = "KGSP";
        $data['nama']  = $this->model('Jurusan_model')->getKGSP();
        $this->view("templates/header", $data);
        $this->view('jurusan/kgsp', $data);
        $this->view('templates/footer');
    }
}