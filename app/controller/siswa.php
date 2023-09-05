<?php
class siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllSiswa();
        $this->view('templates/header',$data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Siswa_model')->tambahDatasiswa($_POST) > 0){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }  
    
    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    
    public function ubah()
    {
        if( $this->model('Siswa_model')->ubahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }

    
}