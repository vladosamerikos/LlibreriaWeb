<?php
echo "<div class='main-page-list-category'>
  <a href='#destacados'>Prodcutos destacados</a>
  <div class='dropcategory'>
    <button class='dropbtn'>Categorias 
      <i class='fa-down'></i>
    </button>
    <div class='dropcategory-content'>";
        foreach ($resultado as $categoria) {
            echo "<a href='index.php?controller=Principal&action=mostrarLibrosCategoria&id=" . $categoria['id_genero'] . "' class='list-category'>" . $categoria['nombre'] . "</a>";
        }
    echo "</div>
  </div> 
</div>";
?>