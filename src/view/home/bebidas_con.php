<?php
require_once '../../controller/SessionController.php';
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
  <link rel="stylesheet" href="../../public/CSS/home.css" />
  <link rel="icon" href="../../public/res/icn/favicon.svg" />
</head>
<body>
<?php
if(isset($_GET['no-carrito'])) {
		require_once '../../components/no-carrito-popup.php';
	}
	if(isset($_SESSION['warning']))
		require_once '../../components/warning-popup.php';
	else
		require_once '../../components/popup.php';
  $_GET['location'] = 'bebidas_con';
  require_once '../../components/header.php';
  ?>
  <div class="content">
    <?php
    $_GET['category'] = 'bebidas_con';
    require_once '../../components/tabs.php';
    require_once '../../components/table.php';
    ?>
  </div>
<?php
require_once '../../components/footer.php';
?>
</body>
</html>
