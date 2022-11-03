<?php
require "models/admin.php";

class LoginController
{

    public function index()
    {
        if (isset($_SESSION['email'])) {
            header('Location: index.php?controller=Libro&action=mostrarLibros');
        } else {
            require "views/loginAdmin/formulario.php";
        }
    }

    public function login()
    {
        $admin = new Admin();
        $_email = trim($_POST['email']);
        $_password = md5(trim($_POST['password']));

        $_result = $admin->login($_email, $_password);
        if ($_result) {
            $_SESSION['email'] = $_email;
            echo "login correcto";
            header('Location: index.php?controller=Libro&action=mostrarLibros');
            die();
        } else {
            echo "login incorrecto";
        }
    }
}