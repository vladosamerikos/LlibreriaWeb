<?php

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



}
