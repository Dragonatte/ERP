<?php

namespace Rmb\Erp\controller;

class SessionController
{
    public static function checkLog(): void
    {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: ./index.php?redirected=true');
        }
    }
}