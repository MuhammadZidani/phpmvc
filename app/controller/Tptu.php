<?php
class Tptu extends Controller{
    public function index(){
        $data['judul'] = "TPTU";
        $data['nama']  = $this->model('Jurusan_model')->getTPTU();
        $this->view("templates/header", $data);
        $this->view('jurusan/tptu', $data);
        $this->view('templates/footer');
    }
}