<?php
require_once("database.php");
class Categoria extends Database
{
    // private $id_articlo;
    // private $id_genero;
    // private $isbn;
    // private $nombre;
    // private $descripcion_short;
    // private $descripcion;
    // private $stock;
    // private $precio_venta;
    // private $imagen;
    // private $estado;

    public function obtenerListado()
    {
        $consulta = $this->db->prepare("SELECT * FROM generos");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
    public function obtenerListadoActivos()
    {
        $consulta = $this->db->prepare("SELECT * FROM generos WHERE estado = 1");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public function anadir($nombre)
    {
        $consulta = $this->db->prepare("INSERT INTO generos (nombre, estado) VALUES ('$nombre',1)") ;
        $consulta->execute();
        $last_id = $this->db->lastInsertId();
        echo "Nueva categoria agregada correctamente";
        echo "ID de la ultima categoria: " . $last_id;
    }

    public function editar($_id_genero, $_nombre)
    {
        $consulta = $this->db->prepare("UPDATE generos SET nombre = '$_nombre' WHERE id_genero = $_id_genero") ;
        $consulta->execute();
        $count =$consulta->execute();
        echo $count." registros actualizados correctamente";
    }

    public function activar($id){
        $consulta = $this->db->prepare("UPDATE generos SET estado = 1 WHERE id_genero LIKE '$id'");
        $count =$consulta->execute();
        echo $count." registros actualizados correctamente";
    }

    public function desactivar($id){
        $consulta = $this->db->prepare("UPDATE generos SET estado = 0 WHERE id_genero LIKE '$id'");
        $count =$consulta->execute();
        echo $count." registros actualizados correctamente";
    }

    public function obtenerInfo($id){
        $consulta = $this->db->prepare("SELECT * FROM generos WHERE id_genero = $id");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

}

