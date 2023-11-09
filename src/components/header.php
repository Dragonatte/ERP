<?php


switch($_GET['location']) {
    case 'home':
        echo <<< EOD
        <header>
          <h1>HOME</h1>
        EOD;
        require_once '../../components/user.php';
        echo <<< EOD
        </header>
        EOD;
        break;
    case 'comida':
        echo <<< EOD
        <header>
          <h1>COMIDA</h1>
        EOD;
        require_once '../../components/user.php';
        echo <<< EOD
        </header>
        EOD;
        break;
    case 'bebidas_con':
        echo <<< EOD
        <header>
          <h1>BEBIDAS CON</h1>
        EOD;
        require_once '../../components/user.php';
        echo <<< EOD
        </header>
        EOD;
        break;
    case 'bebidas_sin':
        echo <<< EOD
        <header>
          <h1>BEBIDAS SIN</h1>
        EOD;
        require_once '../../components/user.php';
        echo <<< EOD
        </header>
        EOD;
        break;
    default:
        header('Location: ../error.php?error-type=404&error-message=No se ha encontrado la p&aacute;gina');
}