<?php
require_once("database.php");
class Pedido extends Database
{
    public function obtenerPedido()
    {
        $consulta = $this->db->prepare("SELECT * FROM factura");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public function envio($id)
    {
        $consulta = $this->db->prepare("UPDATE factura SET estado = enviado WHERE id_articulo LIKE '$id'");
        $count =$consulta->execute();
        echo $count." Registro actualizado correctamente";
    } 
 
    // public function obtenerInfo($id){
    //     $consulta = $this->db->prepare("SELECT * FROM articulo WHERE id_articulo = $id");
    //     $consulta->execute();
    //     $resultado = $consulta->fetchAll();
    //     return $resultado;
    // }
}
