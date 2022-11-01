<?php 
echo "<div class='main-menu-bar'>
    <img class='main-menu-bar-logo' src='./img/logo-high.svg' alt='logo' height='100px' width='100px'>
    <ul class='main-menu-list'>";
    if(isset($_SESSION['email'])){
        echo "<li class='main-menu-list-item'><a href='index.php?controller=Session&action=destroySesion'>Close session</a></li>";
    }else{
        echo "<li class='main-menu-list-item'><a href='index.php?controller=Login&action=index'>Login</a></li>";
    }
    echo "</ul>
</div>";