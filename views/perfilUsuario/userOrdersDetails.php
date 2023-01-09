<?php
echo "
<div class='profile-orders-panel-content-container'>
<div class='profile-orders-panel-title-container'>
    <a class='profile-orders-panel-title' href='index.php?controller=Perfil&action=mostrarPedidosUsuario'>Mis pedidos</a>
    <div class='orange-line'></div>
</div>";

echo "<table class='profile-orders-panel-page-table'>
    <tr>
        <th>ID Articulo</th>
        <th>ISBN</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Cantidad</th>
        <th>Precio Unitario (€)</th>
        <th>Precio Total (€)</th>
    </tr>";
foreach ($userOrders as $orderDetail) {
    echo " <tr>
        <td class='text'>" . $orderDetail['fk_id_articulo'] . "</td>
        <td class='text'>" . $orderDetail['isbn'] . "</td>
        <td><img class='libroicon' src='" . $orderDetail['imagen'] . "'></td>
        <td class='text'>" . $orderDetail['nombre'] . "</td>
        <td class='text'>" . $orderDetail['cantidad'] . "</td>
        <td class='text'>" . formatarPrecio($orderDetail['precio_venta']) . "€</td>
        <td class='text'>" . formatarPrecio($orderDetail['precio']) . "€</td>

        </tr>";
}
echo "</table>
</div>";