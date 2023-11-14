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
                <form action="../../controller/meter_carrito.php" method="post">
                    <input name="location" type="hidden" value="home">
                    <input name="producto" type="hidden" value="{$product['NOMBRE']}">
                    <input name="cantidad" type="number" value="0" min="0">
                    <input type="submit" value="A&ntilde;adir al carrito"/>
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
    $location = str_replace(' ', '_', $category);
    foreach ($products as $product) {
        echo <<<EOD
        <tr>
            <td>{$product['NOMBRE']}</td>
            <td>{$product['DESCRIPCION']}</td>
            <td>{$product['PESO']}g</td>
            <td>{$product['STOCK']}</td>
            <td>
                <form action="../../controller/meter_carrito.php" method="post">
                    <input name="location" type="hidden" value="$location">
                    <input name="producto" type="hidden" value="{$product['NOMBRE']}">
                    <input name="cantidad" type="number" value="0" min="0">
                    <input type="submit" value="A&ntilde;adir al carrito"/>
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