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
    </div>";

    echo "<div class='profile-orders-main-container'>";
        foreach ($userOrders as $order) {
            echo "<div class='profile-order-container'>
                <p>Numero de factura: " . $order['id_factura'] . "</p>
                <p>Fecha del pedido: " . transformarFecha($order['fecha']) . "</p>
                <p>Total €:  " . $order['total'] . " €</p>
                <p>Estado del pedido: " . $order['estado'] . "</p>
                <p class='profile-orders-panel-page-table-td-link'><a class='details-comanda-link' href='index.php?controller=Perfil&action=mostrarDetallePedidoUsuario&id=". $order['id_factura'] . "'>Mostrar detalle</a></p>
            <div>";
        }
    echo "</div>
</div>";

