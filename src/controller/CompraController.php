<?php

namespace Rmb\Erp\controller;

use Rmb\Erp\Model\Carrito;
require_once '../../model/Carrito.php';
class CompraController
{
    public static function precompra($producto, $cantidad): void
    {
        if(!isset($_SESSION['carrito']))
        {
            $c = new Carrito();

        } else {
            $c = (Carrito) $_SESSION['carrito'];
        }

        if($cantidad > 0) {
            $c->addProducto($producto, $cantidad);
            $_SESSION['carrito'] = $c;
        }

        $_SESSION['get-producto'] = $producto;
        $_SESSION['get-cantidad'] = $cantidad;
    }
}