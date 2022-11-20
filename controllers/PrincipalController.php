<?php
require "models/libro.php";
require "models/categoria.php";

class PrincipalController
{

    public function mostrarPaginaPrincipal()
    {
        require_once "views/general/menu.php";
        $libro = new Libro();
        $resultado = $libro->libroDestacado();
        require_once "views/principal/librosImportantes.php";
        require_once "views/principal/preFooter.html";
    }

    public function listaCategoriasPrincipal()
    {
        $categoria = new Categoria();
        $resultado = $categoria->obtenerListado();
        require_once "views/general/mostrarlistaCategorias.php";
    }

}