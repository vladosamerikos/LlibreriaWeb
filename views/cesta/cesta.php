<?php   

echo "<div class='cesta-container'>";
    foreach ($_SESSION['Cesta'] as $id=>$data){
        echo "<div class='cesta-item'>
            <a class='cesta-item-imagen'><img class='cesta-imagen' src='".$data['imagen']."' alt='imagen producto'></a>
            <div class='cesta-item-info-container'>
                <p class='cesta-item-titulo'>".$data['titulo']."</p>
                <p class='cesta-item-pecio'>".$data['precio']."</p>
            </div>
            <div class='cesta-item-action-container'>
                    <a class='cesta-item-action-container-item'><img class='cesta-item-action-img' src='./img/trash-bin.svg'></a>
                    <div class='cesta-item-action-container-items'>
                        <a class='cesta-item-action-container-item'><img class='cesta-item-action-img' src='./img/remove.svg'></a>
                        <a class='cesta-item-action-container-item'>".$data['cant']."</a>
                        <a class='cesta-item-action-container-item'><img class='cesta-item-action-img' src='./img/add.svg'></a>
                    </div>
            </div> 
        </div>";
    }
echo "</div>";




echo "<a href='index.php?controller=Cesta&action=limpiarCesta'>Limpiar Cesta</a>";