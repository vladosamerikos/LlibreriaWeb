<?php

echo "<div class='search_bar'>
            <img class='search_img' src='img/search.svg' alt='lupa de busqueda'>
            <form class='search_form' action='index.php?controller=Buscador&action=buscarCategoria' method='post'>
                <input type='text' name='search' id='search' placeholder='Introduce el nombre de la categoria'>
                <button type='submit'>Buscar</button>
            </form>
        </div>";