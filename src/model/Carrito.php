<?php

namespace Rmb\Erp\model;

class Carrito
{
    private array $_carrito;

    public function __construct()
    {
        $this->_carrito = [];
    }

    public function getCarrito(): array
    {
        return $this->_carrito;
    }

    public function setCarrito(array $carrito): void
    {
        $this->_carrito = $carrito;
    }

    public function addProducto($producto, $cantidad):bool
    {
        if(!array_key_exists($producto, $this->_carrito))
        {
            $this->_carrito[$producto] = $cantidad;
            return true;
        }
        return false;
    }

    public function removeProducto($producto):bool
    {
        if(array_key_exists($producto, $this->_carrito))
        {
            unset($this->_carrito[$producto]);
            return true;
        }
        return false;
    }
}