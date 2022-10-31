
<!--Controlador frontal: fichero que se encarga de cargarlo absolutamente todo  hola gerard-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Llibreria Time2Read</title>
</head>
<body>
<?php
require_once "views/general/cabecera.html";
require_once "views/general/menu.php";
require_once "controllers/LoginController.php";
require_once "controllers/PanelController.php";

if (isset($_GET['controller'])){
    $nombreController = $_GET['controller']."Controller";
}
else{
    //Controlador per dedecte
    $nombreController = "UsuarioController";
}
if (class_exists($nombreController)){
    $controlador = new $nombreController(); 
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action ="mostrarTodos";
    }
    $controlador->$action();   
}else{

    echo "No existe el controlador";
}
// require_once "views/general/pie.html";
?>
</body>
</html>


