<?php
echo "<a href='index.php?controller=Panel&action=mostrarAnadirCategoria'>Añadir categoria</a>
<table class='admin-panel-libros-table'>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Estado</th>
    </tr>";
foreach ($catalogo as $categoria) {
    echo " <tr>
        <td>" . $categoria['id_genero'] . "</td>
        <td>" . $categoria['nombre'] . "</td>
        <td>" . $categoria['estado'] . "</td>
        </tr>";
}
echo "</table>";