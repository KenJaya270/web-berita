<?php
class User extends Controller
{
    public function index()
    {
        Middleware::level('user');
        $data['judul'] = 'User';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/index');
        $this->view('template/footer');
    }

    public function artikelmu()
    {
        Middleware::level('user');
        $data['judul'] = 'Buat Artikelmu!';
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
        $this->view('user/insertArtikel');
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
}
