<?php

namespace Rmb\Erp\model;

use PDO;
use PDOException;

class Model
{
    private static ?PDO $_con = null;
    private static function _connect(): void
    {
        if(self::$_con === null){
            try {
                self::$_con = new PDO('mysql:host=localhost;dbname=restaurante', 'root', '');
                self::$_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                header('Location: ../view/error.php?error-type=500&error-message=Error al conectar con la base de datos');
            }

        }
    }
    public static function getAllUsers(): array | false
	{
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM restaurante');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
    public static function getUserById(int $id): array | false
    {
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM restaurante WHERE CODIGO = :id');
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllProducts(): array | false
    {
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM producto');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getProductsByCategory(string $category): array | false
    {
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM producto WHERE COD_CAT = (SELECT CODIGO FROM categoria WHERE NOMBRE = :category)');
        $stm->bindParam(':category', $category);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}