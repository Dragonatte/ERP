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
    public static function getAllUsers(): array
	{
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM restaurante');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
	}
    public static function getUserById(int $id): array
    {
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM restaurante WHERE CODIGO = :id');
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getUserByMail(string $mail): array
    {
        self::_connect();
        $stm = self::$_con->prepare('SELECT * FROM restaurante WHERE CORREO = :mail');
        $stm->bindParam(':user', $mail);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}