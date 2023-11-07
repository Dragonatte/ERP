<?php

namespace Rmb\Erp\controller;

use Rmb\Erp\model\Model;

require_once '../model/Model.php';
class UserController
{
    public static function verificarUser(): bool
    {
        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $users = Model::getAllUsers();
            foreach ($users as $user) {
                if ($user['CORREO'] == $_POST['email'] && $user['CLAVE'] == $_POST['pass']) {
                    return true;
                }
            }
        } else {
            return false;
        }
        return false;
    }
}
