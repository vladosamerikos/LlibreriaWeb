<?php
require_once("database.php");
class Pedido extends Database
{
    public function obtenerPedido()
    {
        $consulta = $this->db->prepare("SELECT id_factura, fk_id_usuario, fecha, total, factura.estado AS id_estado FROM factura INNER JOIN estado_factura ON factura.estado = estado_factura.id_estado");
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
    
    public function obtenerEstados(){
        $consulta = $this->db->prepare("SELECT * FROM estado_factura");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
    
    public function modificarEstado($id_pedido, $id_estado){
        $consulta = $this->db->prepare("UPDATE factura SET estado = '$id_estado' WHERE id_factura = $id_pedido") ;
        $count =$consulta->execute();
    }

}
