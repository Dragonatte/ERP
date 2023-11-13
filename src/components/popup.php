<?php

if(isset($_SESSION['get-producto'])) {
	$_GET['producto'] = $_SESSION['get-producto'];
	$_GET['cantidad'] = $_SESSION['get-cantidad'];
	unset($_SESSION['get-producto']);
	unset($_SESSION['get-cantidad']);
}
if(!isset($_GET['producto'])) echo '<div class="popup">';
else echo '<div class="popup show">';
?>

    <div class="popup-icon">
        <img src="../../public/res/icn/success.svg" alt="success">
    </div>
    <div class="popup-body">
        <div class="popup-title">
            <h1>Producto agregado al carrito</h1>
        </div>
        <div class="popup-content">
            <?php
            if($_GET['cantidad'] === 1) echo `Se ha agregado 1 {$_GET['producto']} al carrito`;
            else echo `Se han agregado {$_GET['cantidad']} {$_GET['producto']}s al carrito`;
            ?>
        </div>
    </div>
</div>