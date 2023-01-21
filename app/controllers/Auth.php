<?php

class Auth extends Controller
{
    private $userData;
    public function userValidate()
    {
        $this->userData = $this->model('Auth_model')->userCheck($_POST);

        if ($this->userData === false) {
            Flasher::setFlash('danger', '', 'Email atau Password Salah');
            header('Location: ' . BASEURL);
            exit;
        } else {
            $_SESSION['user-login'] = $this->userData;
            $direct = BASEURL . "/guest";
            header("Location: $direct");
            exit;
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user-login']);
        Functions::back();
    }
}
