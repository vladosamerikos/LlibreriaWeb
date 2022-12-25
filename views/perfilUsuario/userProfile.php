<?php
    echo "<h2 class='my-profile-title'>El meu perfil</h2>";
    echo "<div class='pedidos-usuario-profile'>
        <a href='#'>Mis pedidos</a>
    </div>";
    echo "<div class='div1'>
            <div><p>Nombre: ".$datosUser[0]['nombre']."</p></div>
            <br>
            <div><p>Apellidos: ".$datosUser[0]['apellidos']."</p></div>
            <br>
            <div><p>Dirección: ".$datosUser[0]['direccion']."</p></div>
            <br>
            <div><p>Correo: ".$datosUser[0]['email']."</p></div>
            <br>
    </div>";  
?>