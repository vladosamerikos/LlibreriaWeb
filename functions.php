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