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
                self::$_con = new PDO('mysql:host=localhost;dbname=restaurante', 'root', 'root');
                self::$_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                header('Location: ../view/error.php?error-type=500?error-message=Error al conectar con la base de datos?error-details=' . $e->getMessage());
            }

        }
    }
    public static function getConnection(): PDO
    {
        self::_connect();
        return self::$_con;
    }
}