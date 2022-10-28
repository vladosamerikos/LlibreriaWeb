<?php
class AdminController{
    //El controller tiene las diferentes acciones que se pueden hacer 
    public function mostrarFormulario(){
        require_once "views/loginAdmin/formulario.php";
    }
    public function validar(){
        if(isset($_POST)){
            require_once "models/admin.php";
            $admin = new Admin();
            $admin.validaruser();
        }
    }
    public function eliminar(){
        echo "Estoy en eliminar";
    }  

}
?>