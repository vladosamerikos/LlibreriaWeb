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

    public function mostrarAnadirLibro()
    {
        require_once "views/adminPanel/menu.php";
        require_once "views/adminPanel/anadirLibro.php";
    }


    public function anadirLibro(){
        require_once "views/adminPanel/menu.php";
        $libro = new Libro();
        $_idgenero = trim($_POST['idgenero']);
        $_isbn = trim($_POST['isbn']);
        $_nombre = $_POST['nombre'];
        $_descripcion_short = $_POST['descripcion_short'];
        $_descripcion = $_POST['descripcion'];
        $_stock = $_POST['stock'];
        $_precio_venta = $_POST['precio_venta'];
        $_imagen = $_POST['imagen'];
        $libro->anadir($_idgenero, $_isbn, $_nombre, $_descripcion_short, $_descripcion, $_stock, $_precio_venta, $_imagen);

    }
}
