<?php
echo "
<div class='admin-panel-title-container'>
    <h1 class='admin-panel-title'>Categorias</h1>
    <a class='admin-panel-add-link' href='index.php?controller=Panel&action=mostrarAnadirCategoria'>Añadir categoria</a><br>
    <div class='orange-line'></div>
</div>

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