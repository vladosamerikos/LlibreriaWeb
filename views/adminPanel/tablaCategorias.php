<?php
echo "
<div class='admin-panel-title-container'>
    <h1 class='admin-panel-title'>Categorias</h1>
    <a class='admin-panel-add-link' href='index.php?controller=Categoria&action=mostrarAnadirCategoria'>Añadir categoria</a><br>
    <div class='orange-line'></div>
</div>

<table class='admin-panel-page-table'>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Editar</th>
    </tr>";
foreach ($catalogo as $categoria) {
    echo " <tr>
        <td class='text'>" . $categoria['id_genero'] . "</td>
        <td class='text'>" . $categoria['nombre'] . "</td>";
    if ($categoria['estado']) {
        echo "<td><a href='index.php?controller=Categoria&action=desactivarCategoria&id=" . $categoria['id_genero'] . "''><img class='control-icons' src='img/on.svg'></a></td>";
    } else {
        echo "<td><a href='index.php?controller=Categoria&action=activarCategoria&id=" . $categoria['id_genero'] . "'><img class='control-icons' src='img/off.svg'></a></td>";
    }
    echo "
        <td><a href='index.php?controller=Categoria&action=mostrarEditarCategoria&id=" . $categoria['id_genero'] . "''><img class='control-icons' src='img/edit.svg'></a></td>
        </tr>";
}
echo "</table>";