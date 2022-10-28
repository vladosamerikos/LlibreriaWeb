<?php
class AdminController{
    //El controller tiene las diferentes acciones que se pueden hacer 
    public function login(){
       
        require_once "models/admin.php";
        $admin = new Admin();
        require_once "views/loginAdmin/formulario.php";
        

    }

    public function eliminar(){
        echo "Estoy en eliminar";
    }  

}
?>