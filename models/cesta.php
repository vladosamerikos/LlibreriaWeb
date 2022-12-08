<?php
require_once("libro.php");

class Cesta
{
    public function agregarACesta($id, $cant)
    {   
        if (isset($_SESSION['Cesta'])){
            if (isset($_SESSION['Cesta'][$id])){
                $_SESSION['Cesta'][$id]['cant']+=$cant;
            }else{
                $_SESSION['Cesta'][$id]['cant']=$cant;
            }
        }else{
            $_SESSION['Cesta'][$id]['cant']=$cant;
        }     

    }

    public function limpiarCesta(){
        unset($_SESSION['Cesta']);
    }


    public function obtenerDatosCesta(){
        if(isset($_SESSION['Cesta'])){
            $_SESSION['Cesta']['subTotal']=0;
            $_SESSION['Cesta']['Total']=0;
            $_SESSION['Cesta']['Envio']=0;
            foreach($_SESSION['Cesta'] as $id=>$data){
                if (is_numeric($id)){
                    $libro = new Libro();
                    $datos_libro = $libro->obtenerInfo($id);
                    $_SESSION['Cesta'][$id]['imagen'] = $datos_libro[0]['imagen'];
                    $_SESSION['Cesta'][$id]['titulo'] = $datos_libro[0]['nombre'];
                    $_SESSION['Cesta'][$id]['precio'] = $datos_libro[0]['precio_venta'];
                    $_SESSION['Cesta']['subTotal']+= $_SESSION['Cesta'][$id]['precio'] * $_SESSION['Cesta'][$id]['cant'];
                }
            }
            if ($_SESSION['Cesta']['subTotal']>50){
                $_SESSION['Cesta']['Envio']= 0;
                $_SESSION['Cesta']['Total']= $_SESSION['Cesta']['subTotal'];
            }else{
                $_SESSION['Cesta']['Envio']= 5;
                $_SESSION['Cesta']['Total']= $_SESSION['Cesta']['subTotal']+$_SESSION['Cesta']['Envio'];
            }
        }
    }

    public function eliminarLibro($id){
        unset($_SESSION['Cesta'][$id]);
    }

    public function anadirUnaCant($id){
        $_SESSION['Cesta'][$id]['cant']+=1;
    }

    public function eliminarUnaCant($id){
        if ($_SESSION['Cesta'][$id]['cant']>1){
            $_SESSION['Cesta'][$id]['cant']-=1;
        }
    }

}