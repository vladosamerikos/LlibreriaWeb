<?php

require "models/cesta.php";
class CestaController
{

    public function mostrarCesta(){
        if (isset($_SESSION['Cesta'])){
            $cesta = new Cesta();
            $cesta->obtenerDatosCesta();
            require_once './views/cesta/cesta.php';
        }else{
            echo "No tienes articulos";
        }

    }

    public function agregarLibroACesta(){
        $cesta = new Cesta();
        $_id = $_POST['id_lib'];
        $_cant = $_POST['cant'];
        echo "id:".$_id;
        echo "<br>Cant:".$_cant;
        $cesta->agregarACesta($_id,$_cant);
    }

    public function limpiarCesta(){
        $cesta = new Cesta();
        $cesta->limpiarCesta();
        echo "No tienes articulos";
    }

}
