<?php
    $cnx = mysqli_connect("localhost", "root", "");

    mysqli_select_db($cnx, "inventario") or die("no se pudo conectar con la base de datos");
    
    $id = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $desc = $_REQUEST['descripcion'];

    // echo "$id $nombre $desc";

    $inser = "INSERT INTO producto values('$id', '$nombre', '$desc');";

    if (mysqli_query($cnx, $inser)) {
        echo "insercion exitosa";
    } else {
        echo "no se pudo insertar el producto";
    }

    
    
?>