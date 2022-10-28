<?php
class SessionController{
    public function destroySesion(){
        session_destroy();
        echo "<p>Cerrando sesion...</p>";
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='1;URL=index.php'>";
    }
}
?>