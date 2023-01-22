<?php
class User extends Controller
{
    public function index()
    {
        Middleware::level('user');
        $data['judul'] = 'User';
        $data['getAllArtikel'] = $this->model('User_model')->getAllArtikel();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/index', $data);
        $this->view('template/footer');
    }

    public function artikelmu()
    {
        Middleware::level('user');
        $data['judul'] = 'Buat Artikelmu!';
        $data['getAllArtikelById'] = $this->model('User_model')->getAllArtikelById();
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/artikelmu', $data);
        $this->view('template/footer');
    }

    public function buatArtikel()
    {
        Middleware::level('user');
        $data['judul'] = 'Buat Artikel';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/buatArtikel');
        $this->view('template/footer');
    }

    public function insertArtikel()
    {
        Middleware::level('user');
        if ($this->model('User_model')->insertArtikel() > 0) {
            Flasher::setFlash('success', 'tambahkan', 'Artikel Berhasil');
            header('Location: ' . BASEURL . '/user/artikelmu');
            exit;
        } else {
            Flasher::setFlash('danger', 'tambahkan', 'Artikel Gagal');
            header('Location: ' . BASEURL . '/user/artikelmu');
            exit;
        }
    }

    public function lihatArtikel($id)
    {
        $data['getArtikelById'] = $this->model('User_model')->getArtikelById($id);
        $data['judul'] = $data['getArtikelById']['judul'];
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/lihatArtikel', $data);
        $this->view('template/footer');
    }
}
