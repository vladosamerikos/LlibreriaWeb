<?php
session_start();
require "models/admin.php";

class LoginController {

    public function index() {
        if(isset($_SESSION['email'])){
            require "views/loginAdmin/formulario.php";
        }else{
            echo "hay session";
        }
        
    }
    
    public function login(){
        $admin = new Admin();
        $_email = trim($_POST['email']);
        $_password = md5(trim($_POST['password']));
        
        $_result = $admin->login($_email, $_password);
        if ($_result){
            $_SESSION['email'] = $_email;
            echo "login correcto";
            header('Location: index.php?controller=Panel&action=mostrarLibros');
            die();
        }else{
            echo "login incorrecto";
        }


    }



}