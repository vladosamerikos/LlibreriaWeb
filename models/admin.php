<?php
require_once("database.php");
<<<<<<< HEAD
class Admin extends Database
{
=======
class Admin extends Database {
    
>>>>>>> 2221470e997ceca896e11da24bd07ef42fcce7ef
    private $email;
    private $nombre;
    private $clave; 

    // prubas github

    public function login($email, $password)
    {
        $consulta = $this->db->prepare("SELECT * FROM admin WHERE correo LIKE '$email' and clave LIKE '$password'");
        $consulta->execute();
        if ($consulta->fetch(PDO::FETCH_OBJ)) {
            return true;
        } else {
            return false;
        }
    }
}