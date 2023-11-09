<?php
switch($_GET['category'])
{
    case 'all':
        echo <<< EOD
        <div class="tabs">
            <a class="active" href="./home.php?category=all?location=home">Productos</a>
            <a href="./comida.php?category=comida?location=comida">Comida</a>
            <a href="./bebidas_con.php?category=bebidas_con?location=bebidas_con">Bebidas con</a>
            <a href="./bebidas_sin.php?category=bebidas_sin?location=bebidas_sin">Bebidas sin</a>
        </div>
        EOD;
        break;
    case 'comida':
        echo <<< EOD
        <div class="tabs">
            <a href="./home.php?category=all?location=home">Productos</a>
            <a class="active" href="./comida.php?category=comida?location=comida">Comida</a>
            <a href="./bebidas_con.php?category=bebidas_con?location=bebidas_con">Bebidas con</a>
            <a href="./bebidas_sin.php?category=bebidas_sin?location=bebidas_sin">Bebidas sin</a>
        </div>
        EOD;
        break;
    case 'bebidas_con':
        echo <<< EOD
        <div class="tabs">
            <a href="./home.php?category=all?location=home">Productos</a>
            <a href="./comida.php?category=comida?location=comida">Comida</a>
            <a class="active" href="./bebidas_con.php?category=bebidas_con?location=bebidas_con">Bebidas con</a>
            <a href="./bebidas_sin.php?category=bebidas_sin?location=bebidas_sin">Bebidas sin</a>
        </div>
        EOD;
        break;
    case 'bebidas_sin':
        echo <<< EOD
        <div class="tabs">
            <a href="./home.php?category=all?location=home">Productos</a>
            <a href="./comida.php?category=comida?location=comida">Comida</a>
            <a href="./bebidas_con.php?category=bebidas_con?location=bebidas_con">Bebidas con</a>
            <a class="active" href="./bebidas_sin.php?category=bebidas_sin?location=bebidas_sin">Bebidas sin</a>
        </div>
        EOD;
        break;
    default:
        header('Location: ../error.php?error-type=404&error-message=No se ha encontrado la categor&iacute;a');
}