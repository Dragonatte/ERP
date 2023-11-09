<?php

namespace Rmb\Erp\controller;

class SessionController
{
    public static function checkLog(): void
    {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: ../index.php?redirected=true');
        }
    }

    public static function logout(): void
    {
        session_start();
        session_destroy();
        header('Location: ./index.php');
    }
}