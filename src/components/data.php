<?php
require_once '../../controller/ProductController.php';
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
                <form action="../shop/compra.php" method="post">
                    <input type="hidden" value="{$product['NOMBRE']}">
                    <input type="number" value="0" min="0">
                    <button>Comprar</button>
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
                <form action="../shop/compra.php" method="post">
                    <input type="hidden" value="{$product['NOMBRE']}">
                    <input type="number" value="0" min="0">
                    <button>Comprar</button>
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