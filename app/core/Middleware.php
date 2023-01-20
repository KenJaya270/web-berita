<?php
class Middleware
{
    static function auth()
    {
        if (!isset($_SESSION['user-login'])) {
            header('Location: ' . BASEURL);
            exit;
        } else {
            // exit;
        }
    }

    static function level($level)
    {
        Middleware::auth();
        if (!isset($_SESSION['user-login']) && $level = '') {
            return Functions::back();
            exit;
        }

        if (!isset($_SESSION['user-login']) || $level != $level) {
            return Functions::back();
            exit;
        }
    }
}
