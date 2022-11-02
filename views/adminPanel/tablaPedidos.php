<?php
echo "
<div class='admin-panel-title-container'>
    <h1 class='admin-panel-title'>Pedidos</h1>
    <div class='orange-line'></div>
</div>
<table class='admin-panel-pedidos-table'>
    <tr>
        <th>Id Factura</th>
        <th>Id USuario</th>
        <th>Fecha</th>
        <th>Total (€)</th>
        <th>Estado</th>
    </tr>";
foreach ($catalogo as $pedido) {
    echo " <tr>
        <td>" . $pedido['id_factura'] . "</td>
        <td>" . $pedido['fk_id_usuario'] . "</td>
        <td>" . $pedido['fecha'] . "</td>
        <td>" . $pedido['total'] . "</td>
        <td>" . $pedido['estado'] . "</td>
        </tr>";
}
echo "</table>";
