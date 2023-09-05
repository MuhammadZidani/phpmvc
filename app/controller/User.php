<?php
class User extends Controller{
    public function index() {
        //echo "User/index";
        $data['judul'] = "User";
        $this->view("templates/header", $data);
        $this->view('user/index');
        $this->view('templates/footer');
    }
    public function profile($nama = "Muhammad Zidani Ilman Nafia", $pekerjaan = "Siswa") {
    //     echo "Salam Kenal saya $nama, saya seorang $pekerjaan";    
    $data['judul'] = "User";

    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $this->view("templates/header", $data);
    $this->view("user/profile", $data); 
    $this->view('templates/footer');
     
 }

}