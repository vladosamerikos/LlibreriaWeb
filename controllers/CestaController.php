<?php

require "models/libro.php";
class CestaController
{

    public function mostrarCesta(){
        var_dump($_SESSION['Cesta']);
        echo "<br>";
        require_once './views/cesta/cesta.php';
    }

    public function agregarLibroACesta(){
        $libro = new Libro();
        $_id = $_POST['id_lib'];
        $_cant = $_POST['cant'];
        echo "id:".$_id;
        echo "<br>Cant:".$_cant;
        $libro->agregarCesta($_id,$_cant);
    }

    public function limpiarCesta(){
        unset($_SESSION['Cesta']);
        var_dump($_SESSION['Cesta']);
    }

}
