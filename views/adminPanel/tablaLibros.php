<?php
echo "
<div class='admin-panel-title-container'>
    <h1 class='admin-panel-title'>Productes</h1>
    <a class='admin-panel-add-link' href='index.php?controller=Panel&action=mostrarAnadirLibro'>Añadir libro</a><br>
    <div class='orange-line'></div>
</div>
<table class='admin-panel-libros-table'>
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
        <th>Editar</th>
    </tr>";
foreach ($catalogo as $libro) {
    echo " <tr>
        <td class='text'>" . $libro['id_articulo'] . "</td>
        <td class='text'>" . $libro['genero'] . "</td>
        <td class='text'>" . $libro['isbn'] . "</td>
        <td class='text'>" . $libro['nombre'] . "</td>
        <td class='text'>" . $libro['descripcion_short'] . "</td>
        <td class='text'>" . $libro['stock'] . "</td>
        <td class='text'>" . $libro['precio_venta'] . "</td>
        <td><img class='libroicon' src='" . $libro['imagen'] . "'></td>";
        if($libro['estado']){
            echo"<td><a href='index.php?controller=Panel&action=desactivarLibro&id=". $libro['id_articulo'] ."''><img src='img/on.svg'></a></td>";
        }else{
            echo"<td><a href='index.php?controller=Panel&action=activarLibro&id=". $libro['id_articulo'] ."'><img src='img/off.svg'></a></td>";
        }
        echo"
        <td><a href='index.php?controller=Panel&action=mostrarEditarLibro&id=". $libro['id_articulo'] ."''><img src='img/edit.svg'></a></td>
        </tr>";
}
echo "</table>";
