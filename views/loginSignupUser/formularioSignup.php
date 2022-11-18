<?php
echo "
<div class= 'form-container'>
    <div class = 'login-user-content'>
        <form class='login-user-form' method='post' action='index.php?controller=Login&action=loginUser'>
            <h2 class='form-title'>Crear Cuenta</h2>
            <div class='form-row'>
                <label for='nombre'><img class='form-icon' src='img/person.svg'></label>
                <input class='login-form-input' type='text' id='nombre' name='nombre' placeholder='Nombre'>
            </div>
            <div class='form-row'>
                <label for='apellidos'><img class='form-icon' src='img/person.svg'></label>
                <input class='login-form-input' type='text' id='aplellidos' name='apellidos' placeholder='Apellido'>
            </div>
            <div class='form-row'>
                <label for='email'><img class='form-icon' src='img/email.svg'></label>
                <input class='login-form-input' type='email' id='email' name='email' placeholder='Correo'>
            </div>
            <div class='form-row'>
                <label for='direccion'><img class='form-icon' src='img/home.svg'></label>
                <input class='login-form-input' type='text' id='direccion' name='direccion' placeholder='Direccion'>
            </div>
            <div class='form-row'>
                <label for='password'><img class='form-icon' src='img/padlock.svg'> </label>
                <input class='login-form-input' type='password' id='password' name='password' placeholder='Password'>
            </div>
            <div class='form-row'>
                <label for='password2'><img class='form-icon' src='img/redo.svg'> </label>
                <input class='login-form-input' type='password' id='password2' name='password2' placeholder='Repite el password'>
            </div>
            <div class='form-row'>
                <input type='checkbox' name='remember-me' id='remember-me' class='form-checkbox'>
                <label for='remember-me' class='form-label-checkbox'>Acepto los términos de servicio</label>
            </div>    
            <input class='login-user-form-submit-button' name='submit' type='submit' id='submit' value='Crear cuenta'>
        </form>
        <div class='login-user-form-foto-container'>
            <img class='login-user-form-foto' src='img/signposter.png' alt='login image'>
            <a class='signin-user-link' href='index.php?controller=Login&action=mostrarLoginUser'>Tengo cuenta</a>
        </div>
    </div>
</div>
";