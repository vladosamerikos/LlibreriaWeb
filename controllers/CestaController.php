<?php

require "models/libro.php";
class CestaController
{

    public function mostrarCesta(){
        var_dump($_SESSION['Cesta']);
        if(isset($_SESSION['Cesta'])){
            foreach($_SESSION['Cesta'] as $libro){
                $libroItem = new Libro();
                $libroItem->setCantidad($libro['cant']);                
            }
            require_once './views/cesta/cesta.php';

        }else{
            echo "La cesta esta vacia";
        }
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
