<?php
require_once("libro.php");

class Cesta
{
    public function agregarACesta($id, $cant)
    {   
        if (isset($_SESSION['Cesta'])){
            // unset($_SESSION['Cesta']);
            $_SESSION['Cesta'][$id]['cant']=$cant;
        }else{
            $_SESSION['Cesta'][$id]['cant']=$cant;
        }     

    }

    public function limpiarCesta(){
        unset($_SESSION['Cesta']);
        var_dump($_SESSION['Cesta']);
    }


    public function obtenerDatosCesta(){
        if(isset($_SESSION['Cesta'])){
            foreach($_SESSION['Cesta'] as $id=>$data){
                $libro = new Libro();
                $datos_libro = $libro->obtenerInfo($id);
                $_SESSION['Cesta'][$id]['imagen'] = $datos_libro[0]['imagen'];
                $_SESSION['Cesta'][$id]['titulo'] = $datos_libro[0]['nombre'];
                $_SESSION['Cesta'][$id]['precio'] = $datos_libro[0]['precio_venta'];
            }
        }
    }



}