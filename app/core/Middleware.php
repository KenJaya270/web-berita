<?php
class Middleware
{
    static function auth()
    {
        if (!isset($_SESSION['user-login'])) {
            Functions::back();
        } else {
            header('Location: ' . BASEURL . $_SESSION['user-login']['level']);
            exit;
        }
    }

    static function level($level)
    {
        Middleware::auth();
        if (isset($_SESSION['user-login']) && $level = 'user') {
            return Functions::back();
            exit;
        }

        if (!isset($_SESSION['user-login']) || $level != $level) {
            return Functions::back();
            exit;
        }
    }
}
