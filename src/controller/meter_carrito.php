<?php
use Rmb\Erp\Model\Carrito;
require_once '../model/Carrito.php';

session_start();
if(!isset($_SESSION['carrito']))
{
    $c = new Carrito();

} else {
    $c = $_SESSION['carrito'];
}

if($_POST['cantidad'] > 0) {
    $c->addProducto($_POST['producto'], $_POST['cantidad']);
    $_SESSION['carrito'] = $c;
}

$_SESSION['get-producto'] = $_POST['producto'];
$_SESSION['get-cantidad'] = $_POST['cantidad'];

header("Location: ../view/home/{$_POST['location']}.php");