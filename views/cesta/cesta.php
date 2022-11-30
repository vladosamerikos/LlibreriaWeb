<?php   

echo "<div class='cesta-container'>";
    foreach ($_SESSION['Cesta'] as $id=>$data){
        echo "<div class='cesta-item'>
            
            <div class='cesta-item-info-container'>
                <a href='index.php?controller=Libro&action=mostrarLibro&id=".$id."' class='cesta-item-imagen'><img class='cesta-imagen' src='".$data['imagen']."' alt='imagen producto'></a>
                <div class='cesta-item-info-text-container'>
                    <a href='index.php?controller=Libro&action=mostrarLibro&id=".$id."' class='cesta-item-titulo'>".$data['titulo']."</a>
                    <p class='cesta-item-pecio'>".formatarPrecio($data['precio'])."€</p>
                </div>
            </div>
            <div class='cesta-item-action-container'>
                    <a class='cesta-item-action-container-item cesta-item-action-container-item-basura'><img class='cesta-item-action-img' src='./img/trash-bin.svg'></a>
                    <div class='cesta-item-action-container-items'>
                        <a class='cesta-item-action-container-item cesta-item-action-container-item-dell'><img class='cesta-item-action-img' src='./img/remove.svg'></a>
                        <a class='cesta-item-action-container-item cesta-item-action-container-item-num'>".$data['cant']."</a>
                        <a class='cesta-item-action-container-item cesta-item-action-container-item-add'><img class='cesta-item-action-img' src='./img/add.svg'></a>
                    </div>
            </div> 
        </div>";
    }
echo "<div class='cesta-actions-container'>
        <a class='cesta-action' href='index.php?controller=Cesta&action=limpiarCesta'><img class='cesta-item-action-img' src='./img/trash-bin.svg'>&nbsp Vaciar cesta</a>
        <a class='cesta-action' href='index.php?controller=Principal&action=mostrarPaginaPrincipal'>Seguir comprando</a>
    </div>
</div>";



