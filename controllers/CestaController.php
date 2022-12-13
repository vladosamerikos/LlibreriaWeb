<?php
require "models/usuario.php";
require "models/cesta.php";
class CestaController
{

    public function mostrarCesta(){
        $cesta = new Cesta();
        $cesta->obtenerDatosCesta();
        require_once './views/cesta/cesta.php';
    }

    public function agregarLibroACesta(){
        $cesta = new Cesta();
        $_id = $_POST['id_lib'];
        $_cant = $_POST['cant'];
        $cesta->agregarACesta($_id,$_cant);
        header('Location: index.php?controller=Cesta&action=mostrarCesta');
    }

    public function limpiarCesta(){
        $cesta = new Cesta();
        $cesta->limpiarCesta();
        header('Location: index.php?controller=Cesta&action=mostrarCesta');
    }

    public function elimLibro(){
        $_id = $_GET['id'];
        $cesta = new Cesta();
        $cesta->eliminarLibro($_id);
        if(sizeof($_SESSION['Cesta'])==3){
            $cesta->limpiarCesta();
        }
        header('Location: index.php?controller=Cesta&action=mostrarCesta');
    }

    public function anadirUnaCant(){
        $_id = $_GET['id'];
        $cesta = new Cesta();
        $cesta->anadirUnaCant($_id);
        header('Location: index.php?controller=Cesta&action=mostrarCesta');
    }

    public function eliminarUnaCant(){
        $_id = $_GET['id'];
        $cesta = new Cesta();
        $cesta->eliminarUnaCant($_id);
        header('Location: index.php?controller=Cesta&action=mostrarCesta');
    }

    public function selecionarDireccion(){
        if (isset($_SESSION['email']) || isset($_SESSION['role']) || $_SESSION['role']=='user'){
            $user = new Usuario();
            $direccion=$user->getDireccion($_SESSION['email']);
            require_once "views/cesta/direccion.php";
        }else{
            require_once "views/mensajesAviso/avisoSesionCesta.php";
        }
    }

    public function selecionarMetodoDePago(){
        require_once "views/cesta/pago.php";
        var_dump($_SESSION['Cesta']);


    }

    public function tramitarPedido(){
        $cesta = new Cesta();
        $user = new Usuario();
        $data=$user->getId($_SESSION['email']);
        $id_user = $data[0]['id_usuario'];
        $cesta->tramitarPedido($id_user);
        require_once "views/cesta/resument.php";
    }
}
