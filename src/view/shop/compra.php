<?php

session_start();
global $c;
if(!isset($_SESSION['carrito'])) {
    //header('Location: ../home/home.php? no-carrito=true');
} else {
    $c = $_SESSION['carrito'];
}
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
</head>
<body>
  <?php
  $_GET['location'] = 'compra';
  require_once '../../components/header.php';
  ?>
  <div class="content">
    <?php

    ?>
</body>