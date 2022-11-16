<?php
require "models/admin.php";
require "models/usuario.php";

class LoginController
{

    public function index()
    {
        if (isset($_SESSION['email']) && $_SESSION['role']=='admin') {
            header('Location: index.php?controller=Libro&action=mostrarLibros');
        }else if (isset($_SESSION['email']) && $_SESSION['role']=='user') {
            header('Location: index.php?controller=Principal&action=mostrarPaginaPrincipal');
        } else {
            header('Location: index.php?controller=Principal&action=mostrarPaginaPrincipal');
        }
    }

    public function mostrarLoginAdmin(){
        require "views/loginAdmin/formulario.php";
    }

    public function loginAdmin()
    {
        $admin = new Admin();
        $_email = trim($_POST['email']);
        $_password = md5(trim($_POST['password']));

        $_result = $admin->login($_email, $_password);
        if ($_result) {
            $_SESSION['email'] = $_email;
            $_SESSION['role']= 'admin';
            echo "login correcto";
            header('Location: index.php?controller=Libro&action=mostrarLibros');
            die();
        } else {
            echo "login incorrecto";
        }
    }

    public function loginUser()
    {
        $admin = new Usuario();
        $_email = trim($_POST['email']);
        $_password = md5(trim($_POST['password']));

        $_result = $admin->login($_email, $_password);
        if ($_result) {
            $_SESSION['email'] = $_email;
            $_SESSION['role']= 'user';
            echo "login correcto";
            // header('Location: index.php?controller=&action=');
            // die();
        } else {
            echo "login incorrecto";
        }
    }

    public function mostrarSignupUser()
    {
        require "views/loginSignupUser/formularioSignup.php";
    }

    public function mostrarLoginUser()
    {
        require "views/loginSignupUser/formularioLogin.php";
    }



}