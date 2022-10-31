<?php
require_once("database.php");
class Libro extends Database
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

    public function obtenerCatalogo()
    {
        $consulta = $this->db->prepare("SELECT id_articulo, generos.nombre AS genero, isbn, articulo.nombre, descripcion_short, descripcion, stock, precio_venta, imagen, articulo.estado  FROM articulo INNER JOIN generos ON articulo.fk_id_genero = generos.id_genero");
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public function anadir(
        $idgenero,
        $isbn,
        $nombre,
        $descripcion_short,
        $descripcion,
        $stock,
        $precio_venta,
        $imagen
    ) 
    {
        $consulta = $this->db->prepare("INSERT INTO articulo (fk_id_genero, isbn, nombre, descripcion_short, descripcion, stock, precio_venta, imagen, estado) VALUES ($idgenero, $isbn, '$nombre', '$descripcion_short', '$descripcion', $stock, $precio_venta, '$imagen', 1)") ;
        $consulta->execute();
        $last_id = $this->db->lastInsertId();
        echo "Nuevo libro agregado correctamente";
        echo "ID del ultimo libro: " . $last_id;
    }
}
