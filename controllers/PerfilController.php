<?php

require "models/usuario.php";

class PerfilController{
    public function mostrarPerfil()
    {
        require_once "views/general/menuPerfil.php";
        $usuario = new Usuario();
        $datosUser = $usuario->getProfile($_SESSION['email']);
        require_once "views/perfilUsuario/userProfile.php";
    }
    
    public function mostrarPedidosUsuario()
    {
        require_once "views/general/menuPerfil.php";
        $usuario = new Usuario();
        $userOrders = $usuario->getOrders($_SESSION['email']);
        require_once "views/perfilUsuario/userOrders.php";
    }

    public function mostrarDetallePedidoUsuario()
    {
        $pedido = new Usuario();
        $id_pedido = $_GET['id'];
        $userOrders = $pedido->obtenerDetallePedido($id_pedido);
        $estados = $pedido->obtenerEstados();
        require_once "views/perfilUsuario/userOrdersDetails.php";
    }
}