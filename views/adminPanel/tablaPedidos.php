<?php
echo "
<div class='admin-panel-content-container'>
<div class='admin-panel-title-container'>
    <h1 class='admin-panel-title'>Pedidos</h1>
    <div class='orange-line'></div>
</div>";

require_once "views/adminPanel/buscadorPedidos.php";

echo "<table class='admin-panel-page-table'>
    <tr>
        <th>Id Factura</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Total (€)</th>
        <th>Estado</th>
        <th>Detalles del pedido</th>
    </tr>";
foreach ($catalogo as $pedido) {
    echo " <tr>
        <td class='text'>" . $pedido['id_factura'] . "</td>
        <td class='text'>" . $pedido['nombreusu'] . "</td>
        <td class='text'>" . $pedido['fecha'] . "</td>
        <td class='text'>" . $pedido['total'] . "</td>
        <td class='text'><form class='admin-panel-pedido-editar-estado-form' method='post' action='index.php?controller=Pedido&action=editarEstado'>
            <input readonly class='ocult' name='id_factura' id='id_factura' value='".$pedido['id_factura']."'>
            <select name='estado' id='estado'>";
                    foreach ($estados as $estado){
                        if($pedido['id_estado']==$estado['id_estado']){
                            echo "<option selected value='".$estado['id_estado']."'>".$estado['estado']."</option>";
                        }else {
                            echo "<option value='".$estado['id_estado']."'>".$estado['estado']."</option>";
                        }
                    }
    echo    "</select>
            <input class='admin-panel-pedido-submit-button' type='image' name='submit' src='./img/upload2.svg' alt='Confirmar'>
        </form></td>
        </tr>";
        echo "<tr>
                <td colspan='6'>
                    <div>
                        <p>El identificador de la factura es: ".$detalle['fk_id_factura']."</p>
                        <table>
                            <tr>
                                <th>Id articulo</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                            </tr>";
                            foreach ($detalles as $detalle) {
                                echo "<tr></tr>";
                            }
                            echo "<tr>
                                <td colspan='5'>Precio total: " . $pedido['total'] . "</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>";
}
echo "</table>
</div>";