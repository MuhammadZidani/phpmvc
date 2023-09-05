<?php
class Rpl extends Controller{
    public function index(){
        $data['judul'] = "RPL";
        $data['nama']  = $this->model('Jurusan_model')->getRPL();
        $this->view("templates/header", $data);
        $this->view('jurusan/rpl', $data);
        $this->view('templates/footer');
    }
}