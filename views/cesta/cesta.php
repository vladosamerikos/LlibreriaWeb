<?php   

echo "<div class='cesta-page-container' >
        <div class='cesta-container'>";
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
    </div>
    <div class='cesta-total-container'>
        <div class='cesta-total-row'>
            <div class='total-container-title'>Resumen</div>
            <div class='container-title-low-text'>Los cupone se puedem añadir durante el proceso de pago</div>
            <div class='cesta-total-line'>
        </div>
        <div class='cesta-total-row'>
            <div class='subtotal-container-title'><div class='left'>Subtotal</div><div class='rigth'></div></div>
            <div class='subtotal-container-title'><div class='left'>Costes de envío</div><div class='rigth'></div></div>
            <div class='cesta-total-line'>
        </div>
        <div class='cesta-total-row'>
            <div class='total-container-title><div class='left'>Total</div><div class='rigth'></div></div>
            <div class='container-title-low-text'><div class='left'>IVA incluido</div><div class='rigth'></div></div>
        </div>
        <a class='total-container-submit-button'>Tramitar pedido</a>
        <a class='total-container-back-button'>Continuar comprando</a>
    </div>
    </div>

</div>";



