<?php

require "models/usuario.php";

class PerfilController{
    public function mostrarPerfil()
    {
     
        $usuario = new Usuario();
        $datosUser = $usuario->getProfile($_SESSION['email']);
        require_once "views/perfilUsuario/userProfile.php";
    }
}