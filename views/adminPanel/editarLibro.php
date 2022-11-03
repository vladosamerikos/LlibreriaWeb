<?php
echo "<form class='anadir-libro-form' method='post' ENCTYPE='multipart/form-data' action='index.php?controller=Libro&action=editarLibro'>
<input readonly class='ocult' type='number' id='id_articulo' name='id_articulo' value='" . $datosLibro[0]['id_articulo'] . "'>    
<label for='idgenero'>Genero</label>
    <select required name='idgenero' id='idgenero' value='" . $datosLibro[0]['fk_id_genero'] . "'>";
foreach ($listadoCategorias as $categorias) {
    echo "<option value=" . $categorias['id_genero'] . ">" . $categorias['nombre'] . "</option>";
}
echo "</select><br><br>
    <label for='isbn'>ISBN</label>
    <input type='text' id='isbn' name='isbn' value='" . $datosLibro[0]['isbn'] . "'><br><br>
    <label for='nombre'>Titulo</label>
    <input type='text' id='nombre' name='nombre' value='" . $datosLibro[0]['nombre'] . "'><br><br>
    <label for='descripcion_short'>Descripcion corta</label>
    <input type='text' id='descripcion_short' name='descripcion_short' value='" . $datosLibro[0]['descripcion_short'] . "'><br><br>
    <label for='descripcion'>Descripcion</label>
    <input type='text' id='descripcion' name='descripcion' value='" . $datosLibro[0]['descripcion'] . "'><br><br>
    <label for='stock'>Stock</label>
    <input type='text' id='stock' name='stock' value='" . $datosLibro[0]['stock'] . "'><br><br>
    <label for='precio_venta'>Precio</label>
    <input type='number' id='precio_venta' name='precio_venta' value='" . $datosLibro[0]['precio_venta'] . "'><br><br>
    <input type='file' id='imagen' name='imagen'><br><br>
    <input name='submit' type='submit' id='submit' value='Editar libro'><br>
</form>";
