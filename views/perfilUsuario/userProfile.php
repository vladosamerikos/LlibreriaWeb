<?php
    echo "<h2 class='my-profile-title'>El meu perfil</h2>";
    echo "<div class='pedidos-usuario-profile'>
        <a href='#'>Mis pedidos</a>
    </div>";
    echo "<div class='div1-user'>
        <div class='subdiv1-user'>
            <div><p>Nombre: ".$datosUser[0]['nombre']."</p></div>
            <br>
            <div><p>Apellidos: ".$datosUser[0]['apellidos']."</p></div>
            <br>
            <div><p>Dirección: ".$datosUser[0]['direccion']."</p></div>
            <br>
            <div><p>Correo: ".$datosUser[0]['email']."</p></div>
            <br>
        </div>
        <form  class='subdiv2-user' method='post' ENCTYPE='multipart/form-data' action='index.php?controller=Perfil&action=cambiarFoto'>
            <div class='user-profile-row'><img src=' ".$datosUser[0]['foto']."' height='200px' width='170px'></div>
            <div class='user-profile-row'><input type='text' class='ocult' id='oldimagen' name='oldimagen' value='".$datosUser[0]['foto']."'></div>
            <div class='user-profile-row'><input required type='file' class='foto-input' id='imagen' name='imagen'></div>
            <div class='user-profile-row'><button class='profile-save-button' type='submit'><img class='save-icon' src='./img/save.svg' /></button></div>

        </form>
    </div>"; 
?>