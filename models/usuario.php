<?php

require_once("database.php");
class Usuario extends Database
{
    private $id;
    private $nombre;
    private $direccion;
    private $email;
    private $clave;
    private $estado;

    public function login($email, $password)
    {
        $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email LIKE '$email' and clave LIKE '$password' and estado = 1");
        $consulta->execute();
        if ($consulta->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }
 
}
