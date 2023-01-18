<?php

class Register extends Controller
{

    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('template/header', $data);
        $this->view('register/index');
        $this->view('template/footer');
    }

    public function insertUser()
    {
        if ($_POST['password'] != $_POST['confirmPassword']) {
            Flasher::setFlash('warning', '', 'Sandi Tidak Sama');
            header('Location: ' . BASEURL . '/register');
            exit;
        }
        if ($this->model('Register_model')->insertUser($_POST) > 0) {
            Flasher::setFlash('success', 'tambahkan', 'User Berhasil');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('success', 'tambahkan', 'User Berhasil');
            header('Location: ' . BASEURL . '/register');
            exit;
        }
    }
}
