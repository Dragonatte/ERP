<?php
use Rmb\Erp\Model\Carrito;
require_once '../../model/Carrito.php';


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

switch ($_POST['location'])
{
    case 'home':
        header('Location: ../home/home.php');
        break;
    case 'comida':
        header('Location: ../home/comida.php');
        break;
    case 'bebidas_sin':
        header('Location: ../home/bebidas_sin.php');
        break;
    case 'bebidas_con':
        header('Location: ../home/bebidas_con.php');
        break;
}