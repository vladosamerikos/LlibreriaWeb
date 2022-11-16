<?php
echo "
<div class= 'form-container'>
    <div class = 'login-user-content'>
        <div class='login-user-form-foto-container'>
            <img class='login-user-form-foto' src='img/signin-image.jpg' alt='login image'>
            <a class='signin-user-link' href='index.php?controller=Login&action=mostrarLoginUser'>Iniciar session</a>
        </div>
        <form class='login-user-form' method='post' action='index.php?controller=Login&action=loginUser'>
            <h2 class='form-title'>Crear Cuenta</h2>
            <div class='form-row'>
                <label for='email'><img class='form-icon' src='img/email.svg'></label>
                <input class='login-form-input' type='email' id='email' name='email' placeholder='Tu correo'>
            </div>
            <div class='form-row'>
                <label for='password'><img class='form-icon' src='img/padlock.svg'> </label>
                <input class='login-form-input' type='password' id='password' name='password' placeholder='Password'>
            </div>
            <div class='form-row'>
                <input type='checkbox' name='remember-me' id='remember-me' class='form-checkbox'>
                <label for='remember-me' class='form-label-checkbox'>Recuerdame</label>
            </div>    
            <input class='login-user-form-submit-button' name='submit' type='submit' id='submit' value='Iniciar session'>
        </form>
    </div>
</div>
";