<?php   

echo "<div class='cesta-container'>";
    foreach ($_SESSION['Cesta'] as $producto){
        echo "<div class='cesta-item'>
            <a class='cesta-item-imagen'><img src='' alt='imagen producto'></a>
            <div class='cesta-item-info-container'>
                <p class='cesta-item-titulo'></p>
                <p class='cesta-item-pecio'></p>
                <div class='cesta-item-action-container'>
                    <a class='cesta-item-action-container-item'><img class='cesta-item-action-img' src='./img/trash-bin.svg'></a>
                    <div class='cesta-item-action-container-items'>
                        <a class='cesta-item-action-container-item'></a>
                        <a class='cesta-item-action-container-item'></a>
                        <a class='cesta-item-action-container-item'></a>
                    </div>
                </div> 
            </div>
        </div>";

    }


echo "</div>";




echo "<a href='index.php?controller=Cesta&action=limpiarCesta'>Limpiar Cesta</a>";