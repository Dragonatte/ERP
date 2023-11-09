<?php
echo <<< EOD
<div class="user">
<img src="../../public/res/img/user.png" alt="user" />
<div class="actions">
  <p>{$_SESSION['user']['CORREO']}</p>
  <span><a class="carrito" href="../shop/carrito.php">Carrito</a>&nbsp;|&nbsp;<a class="logout" href="../index.php?logout=true">Logout</a></span>
</div>
</div>
EOD;
