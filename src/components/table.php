<?php
require_once '../../controller/ProductController.php';

echo <<<EOD
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
EOD;

switch ($_GET['category']) {
    case 'all':
        require_once '../../components/data.php';
        all();
        break;
    case 'comida':
        require_once '../../components/data.php';
        by_category('comida');
        break;
    case 'bebidas_con':
        require_once '../../components/data.php';
        by_category('bebidas con');
        break;
    case 'bebidas_sin':
        require_once '../../components/data.php';
        by_category('bebidas sin');
        break;
    default:
        header('Location: ../error.php?error-type=404&error-message=No se ha encontrado la categor&iacute;a');
}

