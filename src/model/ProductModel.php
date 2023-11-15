<?php

namespace Rmb\Erp\model;
require_once 'Model.php';

use PDO;
class ProductModel
{
    public static function getAllProducts(): array | false
    {
        $con = Model::getConnection();
        $stm = $con->prepare('SELECT * FROM producto');
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getProductsByCategory(string $category): array | false
    {
        $con = Model::getConnection();
        $stm = $con->prepare('SELECT * FROM producto WHERE COD_CAT = (SELECT CODIGO FROM categoria WHERE NOMBRE LIKE :category)');
        $stm->bindParam(':category', $category);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getProductByName(string $name): array | false
    {
        $con = Model::getConnection();
        $stm = $con->prepare('SELECT * FROM producto WHERE NOMBRE LIKE :name');
        $stm->bindParam(':name', $name);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function updateProductStock(string $name, int $stock): bool
    {
        $con = Model::getConnection();
        $stm = $con->prepare('UPDATE producto SET STOCK = :stock WHERE NOMBRE LIKE :name');
        $stm->bindParam(':name', $name);
        $stm->bindParam(':stock', $stock);
        return $stm->execute();
    }
}