<?php
echo "
<div class='profile-orders-panel-content-container'>
<div class='profile-orders-panel-title-container'>
    <h1 class='profile-orders-panel-title'>Mis pedidos</h1>
    <div class='orange-line'></div>
</div>

<div class='search_bar'>
    <img class='search_img' src='img/search.svg' alt='lupa de busqueda'>
    <form class='search_form' action='index.php?controller=Buscador&action=buscadorFactura' method='post'>
        <input type='text' name='id_pedido' id='id_pedido' placeholder='Introduce el ID del pedido a buscar'>
        <button type='submit'>Buscar</button>
    </form>
</div>
        
<table class='profile-orders-panel-page-table'>
    <tr>
        <th>Id Factura</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th>Total (€)</th>
        <th>Estado</th>
        <th>Detalles del pedido</th>
    </tr>";
foreach ($userOrders as $order) {
    echo " <tr>
        <td class='text'>" . $order['id_factura'] . "</td>
        <td class='text'>" . $order['nombreusu'] . "</td>
        <td class='text'>" . transformarFecha($order['fecha']) . "</td>
        <td class='text'>" . $order['total'] . "</td>
        <td class='text'>" . $order['estado'] . "</td>
        <td class='profile-orders-panel-page-table-td-link'><a class='details-comanda-link' href='index.php?controller=Perfil&action=mostrarDetallePedidoUsuario&id=". $order['id_factura'] . "'>Mostrar detalle</a></td>
        </tr>";
}
echo "</table>
</div>";