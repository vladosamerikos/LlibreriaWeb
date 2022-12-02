<?php

function calcularCesta(){
    $res = 0;
    foreach($_SESSION['Cesta'] as $articulo){
        $res += $articulo['cant'];
    }
    return $res;
}

function transformarFecha($fecha){
    $objFecha = date_create_from_format('Y-m-d', $fecha);
    $formatFecha = date_format($objFecha, 'd/m/Y');
    return $formatFecha;
}

function formatarPrecio($precio){
    return str_replace('.',',',(string)$precio);
}

function adminIncorrecte(){
    header("Location: index.php?controller=Login&action=mostrarLoginAdmin");
}

function usuariIncorrecte(){
    header("Location: index.php?controller=Login&action=mostrarLoginUser");
}