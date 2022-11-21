<?php
echo "<form class='admin-panel-form' method='post' ENCTYPE='multipart/form-data' action='index.php?controller=Libro&action=anadirLibro'>
    <label for='idgenero'>Genero: </label>
    <select required name='idgenero' id='idgenero'>";
foreach ($listadoCategorias as $categorias) {
    echo "<option value=" . $categorias['id_genero'] . ">" . $categorias['nombre'] . "</option>";
}
echo "</select><br><br>
    <input type='text' id='isbn' class='place-holder' name='isbn' placeholder='ISBN'><br><br>
    <input type='text' id='nombre' class='place-holder' name='nombre' placeholder='Nombre'><br><br>
    <input type='text' id='descripcion_short' class='place-holder' name='descripcion_short' placeholder='Descripción Corta'><br><br>
    <input type='text' id='descripcion' class='place-holder' name='descripcion' placeholder='Descripción'><br><br>
    <input type='text' id='stock' class='place-holder' name='stock' placeholder='Stock'><br><br>
    <input type='number' id='precio_venta' class='place-holder' name='precio_venta' placeholder='Precio'><br><br>
    <input type='file' id='imagen' name='imagen'><br><br>
    <input name='submit' type='submit' class='submit-button' id='submit' value='Añadir libro'><br>
</form>";