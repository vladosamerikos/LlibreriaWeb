<?php
echo "
<form class='anadir-libro-form' method='post' action='index.php?controller=Panel&action=editarCategoria'>
<input type='text' id='id_genero' name='id_genero' value='".$datosCategoria[0]['id_genero']."' class='ocult' readonly>
<label for=''>Nombre:</label>
<input type='text' id='nombre' name='nombre' value='".$datosCategoria[0]['nombre']."'><br><br>
<input type='text' id='estado' name='estado' value='".$datosCategoria[0]['estado']."' class='ocult' readonly>
<input name='submit' type='submit' id='submit' value='Editar genero'><br>
</form>";