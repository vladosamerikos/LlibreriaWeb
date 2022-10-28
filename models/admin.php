<?php
require_once("database.php");
class Admin extends Database {
    private $email;
    private $nombre;
    private $clave;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    public function validar(){
        $email = $_POST['email'];
        $clave = $_POST['password'];
        $sql = "SELECT * FROM admin WHERE correo LIKE $email and clave LIKE $clave";
        $rows = $this->db->query($sql);
        
    }



}