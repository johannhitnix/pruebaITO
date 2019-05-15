<?php
    include("eliminador.php");

    $id = $_REQUEST['id'];

    $basurita = new Eliminador();

    $basurita->Borrar($id);


?>