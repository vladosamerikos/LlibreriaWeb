<?php
echo "<table class='admin-panel-libros-table'>
    <tr>
        <th>Id</th>
        <th>Genero</th>
        <th>ISBN</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Imagen</th>
        <th>Estado</th>
    </tr>";
foreach ($catalogo as $libro) {
    echo " <tr>
        <td>" . $libro['id_articulo'] . "</td>
        <td>" . $libro['genero'] . "</td>
        <td>" . $libro['isbn'] . "</td>
        <td>" . $libro['nombre'] . "</td>
        <td>" . $libro['descripcion_short'] . "</td>
        <td>" . $libro['stock'] . "</td>
        <td>" . $libro['precio_venta'] . "</td>
        <td>" . $libro['imagen'] . "</td>
        <td>" . $libro['estado'] . "</td>
        </tr>";
}
echo "</table>";
