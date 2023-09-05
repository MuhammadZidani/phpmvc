<?php
class Akl extends Controller{
    public function index(){
        $data['judul'] = "AKL";
        $data['nama']  = $this->model('Jurusan_model')->getAKL();
        $this->view("templates/header", $data);
        $this->view('jurusan/akl', $data);
        $this->view('templates/footer');
    }
}