<?php

if(isset($_SESSION['get-producto'])) {
	$_GET['producto'] = strtolower($_SESSION['get-producto']);
	unset($_SESSION['get-producto']);
}
if(!isset($_GET['producto'])) echo '<div class="popup">';
else echo '<div class="popup show">';
?>
    <div class="popup-icon">
        <img src="../../public/res/icn/warning.svg" alt="success">
    </div>
    <div class="popup-body">
        <div class="popup-title">
            <h1>No se ha indicado la cantidad</h1>
        </div>
        <div class="popup-content">
             <?php
            echo "<p>Debes indicar la cantidad de {$_GET['producto']} que quiere a&ntilde;adir al carrito</p>";
            ?>
        </div>
    </div>
</div>