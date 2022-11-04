<?php
echo "
<div class='admin-panel-title-container'>
    <h1 class='admin-panel-title'>Pedidos</h1>
    <div class='orange-line'></div>
</div>
<table class='admin-panel-page-table'>
    <tr>
        <th>Id Factura</th>
        <th>Id USuario</th>
        <th>Fecha</th>
        <th>Total (€)</th>
        <th>Estado</th>
    </tr>";
foreach ($catalogo as $pedido) {
    echo " <tr>
        <td class='text'>" . $pedido['id_factura'] . "</td>
        <td class='text'>" . $pedido['fk_id_usuario'] . "</td>
        <td class='text'>" . $pedido['fecha'] . "</td>
        <td class='text'>" . $pedido['total'] . "</td>
        <td class='text'><form class='admin-panel-pedido-editar-estado-form' action='#'>
            <select name='estado' id='estado' value='".$pedido['estado']."'>
                <option value='pendiente'>Pendiente</option>
                <option value='enviado'>Enviado</option>
                <option value='entregado'>Entregado</option>
            </select>
            <input class='admin-panel-pedido-submit-button' type='image' name='submit' src='./img/upload2.svg' alt='Confirmar'>
        </form></td>
        </tr>";
}
echo "</table>";