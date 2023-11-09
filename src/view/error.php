<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="icon" href="../public/res/icn/favicon.svg">
    <title>ERROR</title>
</head>
<body>
<?php
echo <<<EOD
	<h1>ERROR {$_GET['error-type']}</h1>
EOD;
switch ($_GET['error-type']){
		case '500':
				echo <<<EOD
          <h2>Ha ocurrido un error en el servidor</h2>
          <p>Por favor, contacte con el administrador</p>
        EOD;
				break;
		case '404':
				echo <<<EOD
				<h2>La p&aacute;gina solicitada no existe</h2>
				<p>Por favor, compruebe los par&aacute;metros introducidos; si el error persiste, contacte al administrador.</p>
				EOD;
				break;

}
echo <<<EOD
  <p>{$_GET['error-message']}</p>
	<a href="../view/index.php">Volver al inicio</a>
EOD;
?>
</body>
</html>
