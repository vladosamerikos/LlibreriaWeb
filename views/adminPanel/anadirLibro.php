<?php
echo "<form class='anadir-libro-form' method='post' ENCTYPE='multipart/form-data' action='index.php?controller=Libro&action=anadirLibro'>
    <label for='idgenero'>Genero</label>
    <select required name='idgenero' id='idgenero'>";
foreach ($listadoCategorias as $categorias) {
    echo "<option value=" . $categorias['id_genero'] . ">" . $categorias['nombre'] . "</option>";
}
echo "</select><br><br>
    <label for='isbn'>ISBN</label>
    <input type='text' id='isbn' name='isbn'><br><br>
    <label for='nombre'>Titulo</label>
    <input type='text' id='nombre' name='nombre'><br><br>
    <label for='descripcion_short'>Descripcion corta</label>
    <input type='text' id='descripcion_short' name='descripcion_short'><br><br>
    <label for='descripcion'>Descripcion</label>
    <input type='text' id='descripcion' name='descripcion'><br><br>
    <label for='stock'>Stock</label>
    <input type='text' id='stock' name='stock'><br><br>
    <label for='precio_venta'>Precio</label>
    <input type='number' id='precio_venta' name='precio_venta'><br><br>
    <input type='file' id='imagen' name='imagen'><br><br>
    <input name='submit' type='submit' id='submit' value='Añadir libro'><br>
</form>";