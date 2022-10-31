<?php
require "models/libro.php";

class PanelController
{

    public function mostrarLibros()
    {
        require_once "views/adminPanel/menu.php";
        $libro = new Libro();
        $catalogo = $libro->obtenerCatalogo();
        require_once "views/adminPanel/tablaLibros.php";
    }
}
