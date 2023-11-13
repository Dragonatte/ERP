<?php
echo <<< EOD
<div class="user">
<img src="../../public/res/img/user.png" alt="user" />
<div class="actions">
  <p>{$_SESSION['user']}</p>
  <span><a class="carrito" href="../shop/carrito.php">Carrito</a>&nbsp;|&nbsp;<a class="logout" href="../home/home.php?logout=true">Logout</a></span>
</div>
</div>
EOD;
