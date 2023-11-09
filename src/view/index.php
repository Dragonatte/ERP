<!DOCTYPE html>
<html lang="es-es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Iniciar sesi&oacute;n</title>
	<link rel="stylesheet" href="../public/CSS/style.css">
</head>
<body>
	<form action="" method="post">
		<h1>Iniciar sesi&oacute;n</h1>

		<?php
		require_once '../controller/UserController.php';
    use Rmb\Erp\controller\UserController;
		session_start();

		if(isset($_GET['logout'])){
			session_destroy();
			unset($_GET['logout']);
		}

		if(isset($_GET['redirected'])){
			echo <<<EOD
			<div class="nope">
				<p>Debes iniciar sesi&oacute;n para acceder a esta p&aacute;gina</p>
			</div>
			EOD;
    }
    if(isset($_POST['email']) && isset($_POST['pass'])){
			$res = UserController::verificarUser();
			if($res){
				header('Location: ./home/home.php');
				die();
			}else{
        echo <<<EOD
				<div class="nope">
					<p>Usuario o contrase&ntilde;a incorrectos</p>
				</div>
				EOD;
      }
		}
		?>
		<label for="email">Correo</label>
		<input type="email" name="email" id="email" required>
		<label for="pass">Contrase&ntilde;a</label>
		<input type="password" name="pass" id="pass" required>
		<input type="submit" value="Iniciar sesi&oacute;n">
	</form>
</body>
</html>
