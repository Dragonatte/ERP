<?php

use Rmb\Erp\controller\ProductController;
use Rmb\Erp\model\Carrito;

require_once '../../model/Carrito.php';

session_start();
?>
<!DOCTYPE html>
<html lang="es-es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carrito</title>
	<link rel="stylesheet" href="../../public/CSS/carrito.css">
</head>
<body>
  <?php
  $_GET['location'] = 'carrito';
  require_once '../../components/header.php';
  ?>
  <div class="content">
    <?php
    $c = new Carrito();
if(!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = $c;
    $c->addProducto($_POST['producto'], $_POST['cantidad']);
} else {
    $c = $_SESSION['carrito'];
}

echo <<<EOD
<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Descripci&oacute;n</th>
            <th>Peso</th>
            <th>Stock</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
EOD;
if($c->getCarrito() != []) {
    foreach ($c->getCarrito() as $producto => $cantidad) {
				require_once '../../controller/ProductController.php';
				$p = ProductController::getProductByName($producto)[0];
        echo <<<EOD
        <tr>
            <td>{$p['NOMBRE']}</td>
            <td>{$p['DESCRIPCION']}</td>
            <td>{$p['PESO']}</td>
            <td>{$p['STOCK']}</td>
            <td><input type="number" value="$cantidad" min="0"></td>
            <td>
                <form action="../../controller/eliminar.php" method="post">
                    <input type="hidden" name="producto" value="$producto">
                    <input type="hidden" name="cantidad" value="$cantidad">
                    <input type="submit" class="delete" value="Eliminar"/>
                </form>
            </td>
        </tr>
        EOD;
    }
} else {
    echo <<<EOD
        <tr>
            <td id="none" colspan="5">No hay productos en el carrito</td>
        </tr>
    EOD;
}
    echo <<<EOD
      </tbody>
    </table>
    <div class="nav">
	    <form action="../home/home.php">
	        <input type="submit" class="secondary" value="Cancelar"/>
	    </form>
	    <form action="./compra.php" method="post">
	        <input type="submit" class="primary" value="Comprar"/>
	    </form>
		</div>
EOD;
    ?>
  </div>
  <?php
  require_once '../../components/footer.php';
  ?>
</body>
</html>