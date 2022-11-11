<div class="main-page-important-books">
    <?php
        foreach ($resultado as $libro) {
            echo " <div class='important-book'>
                <div><img class='important-book-image' src='" . $libro['imagen'] . "'></div>
                <div><h3>" . $libro['nombre'] . "</h3></div>
                <div class='important-book-short-description'>" . $libro['descripcion_short'] . "</div>
                <div class='important-book-price'>" . $libro['precio_venta'] . "€" . "</div>
                <div>" . "<a href='#' class='important-reservation-book-button'>Reservar Ahora</a>" . "</div>
            </div>";
        }
    ?>
</div>