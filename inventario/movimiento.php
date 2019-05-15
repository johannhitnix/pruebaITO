<?php
    include("registroMovimiento.php");
    
    $idMov = $_REQUEST['idMov'];
    $idPro = $_REQUEST['idPro'];
    $tipoMov = $_REQUEST['tipoMov'];    
    $cantidad = $_REQUEST['cantidad'];
    $precio = $_REQUEST['precio'];
    $fecha = $_REQUEST['fecha'];

    // echo "$idMov $idPro $tipoMov $cantidad $precio $fecha";

    $Registrador = new Basis();

    $Registrador->registrar($idMov, $idPro, $tipoMov, $cantidad, $precio, $fecha);


?>

       