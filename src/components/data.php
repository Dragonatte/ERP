<?php
require_once '../../controller/ProductController.php';
require_once '../../controller/CompraController.php';

use Rmb\Erp\controller\CompraController;
use Rmb\Erp\controller\ProductController;

function all(): void
{
    $products = ProductController::getAllProducts();
    foreach ($products as $product) {
        echo <<<EOD
        <tr>
            <td>{$product['NOMBRE']}</td>
            <td>{$product['DESCRIPCION']}</td>
            <td>{$product['PESO']}g</td>
            <td>{$product['STOCK']}</td>
            <td>
                <form action="" method="post">
                    <input name="producto" type="hidden" value="{$product['NOMBRE']}">
                    <input name="cantidad" type="number" value="0" min="0">
                    <input type="submit" value="Comprar"/>
                </form>
            </td>
        </tr>
        EOD;
    }
    echo <<<EOD
        </tbody>
    </table>
    EOD;
}

function by_category($category):void
{
    $products = ProductController::getProductsByCategory($category);
    foreach ($products as $product) {
        echo <<<EOD
        <tr>
            <td>{$product['NOMBRE']}</td>
            <td>{$product['DESCRIPCION']}</td>
            <td>{$product['PESO']}g</td>
            <td>{$product['STOCK']}</td>
            <td>
                <form action="" method="post">
                    <input name="producto" type="hidden" value="{$product['NOMBRE']}">
                    <input name="cantidad" type="number" value="0" min="0">
                    <input type="submit" value="Comprar"/>
                </form>
            </td>
        </tr>
        EOD;
    }
    echo <<<EOD
        </tbody>
    </table>
    EOD;
}
if(isset($_POST['producto']) && isset($_POST['cantidad']))
    CompraController::precompra($_POST['producto'], $_POST['cantidad']);