<?php
require "models/libro.php";
require "models/categoria.php";
require "models/pedidos.php";

class BuscadorController
{

    public function buscarCategoria()
    {
        require_once "views/adminPanel/menu.php";
        $filtro = $_POST['search'];
        $buscador = new Categoria();
        $catalogo = $buscador->buscarCategorias($filtro);
        require_once "views/adminPanel/tablaCategorias.php";
    }

    public function buscarLibro()
    {
        require_once "views/adminPanel/menu.php";
        $filtro = $_POST['search'];
        $buscador = new Libro();
        $catalogo = $buscador->buscarLibros($filtro);
        require_once "views/adminPanel/tablaLibros.php";
    }

    public function buscarPedido()
    {
        require_once "views/adminPanel/menu.php";
        $filtro = $_POST['search'];
        $buscador = new Pedido();
        $catalogo = $buscador->buscarPedidos($filtro);
        $estados = $buscador->obtenerEstados();
        require_once "views/adminPanel/tablaPedidos.php";
    }
    
}