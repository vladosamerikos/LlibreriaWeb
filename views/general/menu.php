<?php
echo "<div class='main-menu-bar'>
<a href='index.php?controller=Login&action=index'><img class='main-menu-bar-logo' src='./img/logo-high.svg' alt='logo' height='100px' width='100px'></a>
<ul class='main-menu-list'>";
    if (isset($_SESSION['email'])) {
        if (isset($_SESSION['email']) && $_SESSION['role']=='admin')
        {
            // Vista 1: Admin
            echo "<li class='main-menu-list-item'><a href='index.php?controller=Login&action=destroySesion'>Cerrar Sessión</a></li>";
        }
        if (isset($_SESSION['email']) && $_SESSION['role']=='user')
        {
            // Vista 2: User
            echo "<div class='search_bar'>
                    <img class='search_img' src='img/search.svg' alt='lupa de busqueda'>
                    <form class='search_form' action='index.php?controller=Buscador&action=buscadorGeneral' method='post'>
                        <select name='filtro'>
                            <option value='articulo.nombre' selected> Titulo </option>
                            <option value='articulo.isbn'> ISBN </option>
                            <option value='generos.nombre'> Genero </option>
                        </select>
                        <input type='text' name='search' id='search' placeholder=' Buscar ...'>
                        <button type='submit'>Buscar</button>
                    </form>
                </div>";
            if(isset($_SESSION['Cesta'])){
                echo "<span style='color: white;'>".calcularCesta()."</span>";
            }
            echo "<a href='index.php?controller=Cesta&action=mostrarCesta'><img class='menu-header-basket-photo' src='./img/basket.svg' alt='basket' height='40px' width='40px'></a>";
            echo "<a href='#'><img class='menu-header-user-photo' src='./img/user.svg' alt='user' height='40px' width='40px'></a>";
            echo "<li class='main-menu-list-item'><a href='index.php?controller=Login&action=destroySesion'>Cerrar Sessión</a></li>";
        }
    }
    else
    {
        // Vista 3: User no logueado
        if(isset($_SESSION['Cesta'])){
            echo "<span style='color: white;'>".calcularCesta()."</span>";
        }
        echo "<a href='index.php?controller=Cesta&action=mostrarCesta'><img class='menu-header-basket-photo' src='./img/basket.svg' alt='basket' height='40px' width='40px'></a>";
        echo "<li class='main-menu-list-item'><a href='index.php?controller=Login&action=mostrarLoginUser'>Iniciar Sessión</a></li>";
    }
echo "</ul>
</div>";
