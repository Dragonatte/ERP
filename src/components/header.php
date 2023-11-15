<?php
echo '<header>';

switch($_GET['location']) {
    case 'home':
        echo '<h1>HOME</h1>';
        break;
    case 'comida':
        echo '<h1>COMIDA</h1>';
        break;
    case 'bebidas_con':
        echo '<h1>BEBIDAS CON</h1>';
        break;
    case 'bebidas_sin':
        echo '<h1>BEBIDAS SIN</h1>';
        break;
    case 'carrito':
        echo '<h1>CARRITO</h1>';
        break;
    case 'compra':
        echo '<h1>COMPRA</h1>';
        break;
    default:
        header('Location: ../error.php?error-type=404&error-message=No se ha encontrado la página');
}

require_once '../../components/user.php';
echo '</header>';
