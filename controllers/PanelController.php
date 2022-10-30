<?php

require "models/libro.php";
require "views/adminPanel/menu.php";
class PanelController {

    

    public function mostrarLibros(){
        $libro = new Libro();
        $catalogo=$libro->obtenerCatalogo();
        require_once "views/adminPanel/tablaLibros.php";
    }
}