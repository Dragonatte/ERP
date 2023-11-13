<?php

namespace Rmb\Erp\model;

require_once 'Model.php';

use PDO;
class UserModel
{
    public static function getAllUsers(): array | false
	{
        $con = Model::getConnection();
        $stm = $con->prepare('SELECT * FROM restaurante');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
    public static function getUserByCorreo(string $correo): array | false
    {
        $con = Model::getConnection();
        $stm =  $con->prepare('SELECT * FROM restaurante WHERE CORREO = :correo');
        $stm->bindParam(':correo', $correo);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}