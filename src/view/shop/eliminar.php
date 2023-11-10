<?php
require_once '../../model/Carrito.php';

session_start();
$c = $_SESSION['carrito'];

$c->removeProducto($_POST['producto']);

$_SESSION['carrito'] = $c;

header('Location: ../shop/carrito.php');