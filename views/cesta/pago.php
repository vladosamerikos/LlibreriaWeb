<?php
echo "
<form class='pago-page-container' method='POST'>
    <div class='pago-content-container'>
        <div class='pago-option'>
            <input type='radio' id='bankTransfer' name='metodoDePago' value='bankTransfer' checked><label for='bankTransfer'>Transferencia bancaria</label>
        </div>
    </div>

    <div class='cesta-total-container'>
        <div class='cesta-total-row'>
            <div class='total-container-title'>Resumen</div>
            <div class='container-title-low-text'>Los cupone se puedem añadir durante el proceso de pago</div>
            <div class='cesta-total-line'></div>
        </div>
        <div class='cesta-total-row'>
            <div class='subtotal-container-title'><div class='left'>Subtotal</div><div class='rigth'>". formatarPrecio($_SESSION['Cesta']['subTotal']) ."€</div></div>
            <div class='subtotal-container-title'><div class='left'>Costes de envío</div><div class='rigth'>";
            $_SESSION['Cesta']['Total']= $_SESSION['Cesta']['subTotal']+$_SESSION['Cesta']['Envio'];
                if( $_SESSION['Cesta']['Envio']>0){
                    echo $_SESSION['Cesta']['Envio']."€";
                }else{
                    echo "Gratis";
                }

            echo"</div></div>
            <div class='cesta-total-line'></div>
        </div>
        <div class='cesta-total-row'>
            <div class='total-container-title'><div class='left'>Total</div><div class='rigth'>". formatarPrecio($_SESSION['Cesta']['Total']) ."€</div></div>
            <div class='container-title-low-text'><div class='left'>IVA incluido</div><div class='rigth'></div></div>
        </div>
        <a href='index.php?controller=Cesta&action=tramitarPedido' class='total-container-submit-button'>Tramitar pedido</a>
    </div>
</form>";
