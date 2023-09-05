<?php
class Dpib extends Controller{
    public function index(){
        $data['judul'] = "DPIB";
        $data['nama']  = $this->model('Jurusan_model')->getDPIB();
        $this->view("templates/header", $data);
        $this->view('jurusan/dpib', $data);
        $this->view('templates/footer');
    }
}