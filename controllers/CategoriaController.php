<?php
require "models/categoria.php";

class CategoriaController
{

    public function mostrarCategorias()
    {
        require_once "views/adminPanel/menu.php";
        $categoria = new Categoria();
        $catalogo = $categoria->obtenerListado();
        require_once "views/adminPanel/tablaCategorias.php";
    }

    public function mostrarAnadirCategoria()
    {
        require_once "views/adminPanel/menu.php";
        require_once "views/adminPanel/anadirCategoria.php";
    }

    public function anadirCategoria()
    {
        require_once "views/adminPanel/menu.php";
        $categoria = new Categoria();
        $nombre = $_POST['nombre'];
        $categoria->anadir($nombre);
    }

    public function activarCategoria()
    {
        $_idcategoria = $_GET['id'];
        $categoria = new Categoria();
        $categoria->activar($_idcategoria);
        header("Location: index.php?controller=Categoria&action=mostrarCategorias");
    }

    public function desactivarCategoria()
    {
        $_idcategoria = $_GET['id'];
        $categoria = new Categoria();
        $categoria->desactivar($_idcategoria);
        header("Location: index.php?controller=Categoria&action=mostrarCategorias");
    }

    public function mostrarEditarCategoria()
    {
        $_idcategoria = $_GET['id'];
        $categoria = new Categoria();
        $datosCategoria = $categoria->obtenerInfo($_idcategoria);
        require_once "views/adminPanel/menu.php";
        require_once "views/adminPanel/editarCategoria.php";
    }

    public function editarCategoria()
    {
        require_once "views/adminPanel/menu.php";
        $categoria = new Categoria();
        $_id_genero = $_POST['id_genero'];
        $_nombre = $_POST['nombre'];
        $_estado = $_POST['estado'];

        $categoria->editar($_id_genero, $_nombre);
        header("Location: index.php?controller=Categoria&action=mostrarCategorias");
    }
}