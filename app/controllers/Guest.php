<?php
class Guest extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['user'] = $_SESSION['user-login'];
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('guest/index');
        $this->view('template/footer');
    }

    public function about()
    {
        $data['judul'] = 'About';
        $data['user'] = $_SESSION['user-login'];
        $this->view('template/header', $data);
        $this->view('template/navbar', $data);
        $this->view('about/index');
        $this->view('template/footer');
    }
}
