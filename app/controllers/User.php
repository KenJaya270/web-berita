<?php
class User extends Controller
{
    public function index()
    {
        Middleware::auth();
        Middleware::level('user');
        $data['judul'] = 'User';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/index');
        $this->view('template/footer');
    }

    public function buatArtikel()
    {
        $data['judul'] = 'Buat Artikelmu!';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('user/buatArtikel');
        $this->view('template/footer');
    }
}
