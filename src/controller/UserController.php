<?php

namespace Rmb\Erp\controller;

use Rmb\Erp\model\UserModel;
require_once '../model/UserModel.php';

class UserController
{
    public static function verificarUser(): bool
    {
        if (!(isset($_POST['email']) && isset($_POST['pass']))) return false;

        $correo = $_POST['email'];
        $pass = $_POST['pass'];
        $user = UserModel::getUserByCorreo($correo);

        if(!$user) return false;

        if(strcmp(trim($user[0]['CLAVE']), $pass) != 0) return false;

        session_start();

        $_SESSION['user'] = $user[0]['CORREO'];
        $_SESSION['id'] = $user[0]['ID'];

        return true;
    }
}
