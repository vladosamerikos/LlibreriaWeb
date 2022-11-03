<?php
require "models/pedidos.php";


class PedidoController
{

    public function mostrarPedidos()
    {
        require_once "views/adminPanel/menu.php";
        $pedido = new Pedido();
        $catalogo = $pedido->obtenerPedido();
        require_once "views/adminPanel/tablaPedidos.php";
    }
}
