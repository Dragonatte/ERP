<?php

namespace Rmb\Erp\controller;
require_once '../../model/Model.php';

use Rmb\Erp\model\Model;

class ProductController
{
    public static function getAllProducts(): false|array
    {
        return Model::getAllProducts();
    }

    public static function getProductsByCategory(string $category): false|array
    {
        return Model::getProductsByCategory($category);
    }
}