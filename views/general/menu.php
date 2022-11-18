<?php
echo "<div class='main-menu-bar'>
<img class='main-menu-bar-logo' src='./img/logo-high.svg' alt='logo' height='100px' width='100px'>
<ul class='main-menu-list'>";
    if (isset($_SESSION['email'])) {
        if (isset($_SESSION['email']) && $_SESSION['role']=='admin')
        {
            // Vista 1: Admin
            echo "<li class='main-menu-list-item'><a href='index.php?controller=Session&action=destroySesion'>Cerrar Sessión</a></li>";
        }
        if (isset($_SESSION['email']) && $_SESSION['role']=='user')
        {
            // Vista 2: User
            echo "<a href='#'><img class='menu-header-basket-photo' src='./img/basket.svg' alt='basket' height='40px' width='40px'></a>";
            echo "<a href='#'><img class='menu-header-user-photo' src='./img/user.svg' alt='user' height='40px' width='40px'></a>";
            echo "<li class='main-menu-list-item'><a href='index.php?controller=Session&action=destroySesion'>Cerrar Sessión</a></li>";
        }
    }
    else
    {
        // Vista 3: User no logueado
        echo "<a href='#'><img class='menu-header-basket-photo' src='./img/basket.svg' alt='basket' height='40px' width='40px'></a>";
        echo "<li class='main-menu-list-item'><a href='index.php?controller=Login&action=mostrarLoginUser'>Iniciar Sessión</a></li>";
    }
echo "</ul>
</div>";
