<?php
require "models/pedidos.php";
class PedidoController
{

    public function mostrarPedidos()
    {
        require_once "views/adminPanel/menu.php";
        $pedido = new Pedido();
        $catalogo = $pedido->obtenerPedido();
        $estados = $pedido->obtenerEstados();
        require_once "views/adminPanel/tablaPedidos.php";
    }

    public function editarEstado()
    {
        $_id_estado = $_POST['estado'];
        $_id_factura = $_POST['id_factura'];
        $pedido = new Pedido();
        $pedido->modificarEstado($_id_factura, $_id_estado);
        require_once "views/adminPanel/menu.php";
        require_once "views/adminPanel/tablaPedidos.php";
    }


}
