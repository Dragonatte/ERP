<?php
use Rmb\Erp\controller\ProductController;
use Rmb\Erp\controller\MailController;

require_once '../../controller/ProductController.php';
require_once '../../controller/MailController.php';

require_once '../../model/Carrito.php';
session_start();
global $c;
if(!isset($_SESSION['carrito']) || $_SESSION['carrito']->getcarrito() == []) {
    header('Location: ../home/home.php?no-carrito=true');
} else {
    $c = $_SESSION['carrito'];
}
global $total;
?>

<!DOCTYPE html>
<html lang="es-es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Compra</title>
  <link rel="stylesheet" href="../../public/CSS/compra.css">
	<link rel="icon" href="../../public/res/icn/favicon.svg">
</head>
<body>
  <?php
  $_GET['location'] = 'compra';
  require_once '../../components/header.php';
  ?>
  <div class="content">
    <?php
			foreach ($c->getCarrito() as $producto => $cantidad) {
				if(!ProductController::updateProductStock($producto, $cantidad))
					header('Location: ../error.php?error-type=500&error-message=No se ha podido actualizar el stock del producto&error-details=Error en la base de datos');
				$total .= 'Has comprado ' . $cantidad . ' ' . $producto . "\n";
      }
			unset($_SESSION['carrito']);
    ?>
		<div class="success">
	    <div class="success-icon">
	        <img src="../../public/res/icn/success.svg" alt="success">
	    </div>
	    <div class="success-body">
	        <div class="success-title">
	            <h1>La compra se ha realizado correctamente</h1>
	        </div>
	        <div class="success-content">
						<p>Se ha actualizado el stock de los productos, en breve recibira el correo con el resumen</p>
	        </div>
		      <a class="enlace" href="../home/home.php">Volver al inicio</a>
	    </div>
	</div>
  <?php
  $from = 'rodrigomurillo99@gmail.com';
	$to = 'rodrigomurillo99@gmail.com';
	MailController::sendMail($from, $to, 'Resumen de compra', $total);
  require_once '../../components/footer.php';
  ?>
</body>