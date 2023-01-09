<?php
    echo "<h2 class='my-profile-title'>El meu perfil</h2>";
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
        <div class='subdiv2-user'>
            <div><img src=' ".$datosUser[0]['foto']."' height='200px' width='170px'></div>
            <div><input type='button' name='fotografia' value='Cambiar Fotografia'></div>

        </div>
    </div>"; 
?>