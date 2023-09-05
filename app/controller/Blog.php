<?php
class Blog extends Controller
{
    public function index ()
    {
        $data['judul'] = "Blog";
        $data['guru'] = $this->model("Blog_model")->getAllBlog();
        $this->view("templates/header", $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model("Blog_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('Blog/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Blog_model')->tambahDataGuru($_POST) > 0){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/Blog');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/Blog');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Blog_model')->hapusDataGuru($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/Blog');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Blog');
            exit;
        }
    } 
}