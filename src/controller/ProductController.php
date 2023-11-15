<?php

namespace Rmb\Erp\controller;

use Rmb\Erp\model\ProductModel;
require_once '../../model/ProductModel.php';

class ProductController
{
    public static function getAllProducts(): false|array
    {
        return ProductModel::getAllProducts();
    }

    public static function getProductsByCategory(string $category): false|array
    {
        return ProductModel::getProductsByCategory($category);
    }

    public static function getProductByName(string $name): false|array
    {
        return ProductModel::getProductByName($name);
    }

    public static function updateProductStock(string $name, int $stock): bool
    {
        $old_stock = self::getProductByName($name)[0]['STOCK'];
        $stock += $old_stock;
        return ProductModel::updateProductStock($name, $stock);
    }
}