<?php
class AdminController{
    //El controller tiene las diferentes acciones que se pueden hacer 
    public function login(){
       
        require_once "models/admin.php";
        $admin = new Admin();
        require_once "views/loginAdmin/formulario.php";
        

    }
    public function crear(){
        require_once "views/usuarios/crear.php";
    }
    public function alta(){
       if (isset($_POST)){
        //Falta acabar
        /* require_once "models/usuario.php";
         $usuario = new Usuario();
         $usuario->conectar();
         $usuario->insertar();*/
       }  

    }

    public function modificar(){
       echo "Estoy en modificar";
    }  
    public function eliminar(){
        echo "Estoy en eliminar";
    }  

}
?>