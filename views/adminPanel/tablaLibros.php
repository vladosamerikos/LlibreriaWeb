<?php
echo "<a href='index.php?controller=Panel&action=mostrarAnadirLibro'>Añadir libro</a>
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
        <td>" . $libro['id_articulo'] . "</td>
        <td>" . $libro['genero'] . "</td>
        <td>" . $libro['isbn'] . "</td>
        <td>" . $libro['nombre'] . "</td>
        <td>" . $libro['descripcion_short'] . "</td>
        <td>" . $libro['stock'] . "</td>
        <td>" . $libro['precio_venta'] . "</td>
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
