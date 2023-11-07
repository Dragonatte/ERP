<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR</title>
</head>
<body>
<?php
echo <<<EOD
	<h1>ERROR {$_GET['error-type']}</h1>
  <h2>Ha ocurrido un error en el servidor</h2>
  <p>{$_GET['error-message']}</p>
	<a href="../view/index.php">Volver al inicio</a>
EOD;
?>
</body>
</html>
