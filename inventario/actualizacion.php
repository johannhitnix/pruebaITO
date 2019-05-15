<?php
    include("registroMovimiento.php");
    $actualizador = new Basis();

    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $desc = $_REQUEST['descripcion'];

    // echo "$id <br> $nombre <br> $desc <br> algo";

    $actualizador->actualizarNombre($id, $nombre);
    $actualizador->actualizarDesc($id, $desc);

    // if(!isset($nombre)){
    //     echo "entro nombre";
    //     $actualizador->actualizarNombre($id, $nombre);
    // }

    // if(!isset($desc)){
    //     echo "entro decsc";
    //     $actualizador->actualizarDesc($id, $desc);
    // }

    
?>