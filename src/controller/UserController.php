<?php

namespace Rmb\Erp\controller;

use Rmb\Erp\model\UserModel;
require_once '../model/UserModel.php';

class UserController
{
    public static function verificarUser(): bool
    {
        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $users = UserModel::getAllUsers();
            foreach ($users as $user) {
                if (strcmp( trim($user['CORREO']), trim($_POST['email']) ) === 0 &&
                    strcmp( trim($user['CLAVE']), trim($_POST['pass']) ) === 0)
                {
                    session_start();
                    $_SESSION['user'] = $user;
                    var_dump($_SESSION);
                    return true;
                }
            }
        }
        return false;
    }
}
