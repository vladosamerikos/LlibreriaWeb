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
        <td class='text'><form class='admin-panel-pedido-editar-estado-form' method='post' action='index.php?controller=Categoria&action=modificarEstado'>
            <input readonly class='ocult' name='id_factura' id='id_factura'>
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
}
echo "</table>";