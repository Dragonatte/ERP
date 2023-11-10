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
    public static function getUserById(int $id): array | false
    {
        $con = Model::getConnection();
        $stm =  $con->prepare('SELECT * FROM restaurante WHERE CODIGO = :id');
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}