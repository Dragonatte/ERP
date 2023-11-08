<?php
require_once '../controller/SessionController.php';
use Rmb\Erp\controller\SessionController;
SessionController::checkLog();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Documento</title>
  <link rel="stylesheet" href="../public/CSS/home.css" />
  <link rel="icon" href="../public/res/icn/favicon.png" />
</head>
<body>
	<header>
		<h1>Home</h1>

	</header>
		<div class="content">
			<div class="tabs">
				<a class="active" href="home.php">Todos los productos</a>
				<a href="home/comida.php">Comida</a>
				<a href="home/bebidas_con.php">Bebidas con</a>
				<a href="home/bebidas_sin.php">Bebidas sin</a>
			</div>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripci&oacute;n</th>
					<th>Peso</th>
					<th>Stock</th>
					<th>Comprar</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require_once '../controller/ProductController.php';
				use Rmb\Erp\controller\ProductController;
				$products = ProductController::getAllProducts();
				foreach ($products as $product) {
					echo <<<EOD
					<tr>
						<td>{$product['NOMBRE']}</td>
						<td>{$product['DESCRIPCION']}</td>
						<td>{$product['PESO']}g</td>
						<td>{$product['STOCK']}</td>
						<td><input type="number" value="0"><button>Comprar</button></td>
					</tr>
					EOD;
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>