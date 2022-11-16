<div class="main-page-list-category">
    <?php
        foreach ($resultado as $categoria) {
            echo " <div class='list-category'>
                <p>".$categoria['nombre']."</p>
            </div>";
        }
    ?>
</div>