<?php
require "models/libro.php";

class PrincipalController
{

    public function mostrarPaginaPrincipal()
    {
        require_once "views/general/menu.php";
        $libro = new Libro();
        $resultado= $libro->libroDestacado();
        require_once "views/principal/librosImportantes.php";
    }



}