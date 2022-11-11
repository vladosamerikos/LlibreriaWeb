<?php
echo "
<div class= 'form-container'>
    <div class = 'login-user-content'>
        <form class='formLoginAdmin' method='post' action='index.php?controller=Login&action=loginUser'>
            <h2 class='form-title'>Iniciar session</h2>
            <div class='form-row'>
                <label for='email'><img class='form-icon' src='img/email.svg'></label>
                <input class='login-form-input' type='email' id='email' name='email' placeholder='Tu correo'>
            </div>
            <div class='form-row'>
                <label for='password'><img class='form-icon' src='img/padlock.svg'> </label>
                <input class='login-form-input' type='password' id='password' name='password' placeholder='Password'>
            <input name='submit' type='submit' id='submit' value='Iniciar session'><br>
        </form>
    </div>
</div>
";