<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>MODULO DE INVENTARIO</h1>
    <br><br>
    <h3>registrar un producto</h3>
    <form action="producto.php" method="post">
    
        <input type="text" name="id" placeholder="id producto"><br><br>
        <input type="text" name="nombre" placeholder="nombre"><br><br>
        <input type="text" name="descripcion" placeholder="descripcion"><br><br>
        <input type="submit" value="registrar" name="registrar">
    </form>
    <br><br>
    <h3>eliminar un producto</h3>
    <form action="eliminar.php" method="post">
        <input type="text" name="id" placeholder="id producto"><br><br>
        <input type="submit" value="eliminar" name="eliminar">
    </form>
    <br><br>
    <h3>registrar un movimiento</h3>
    <form action="movimiento.php" method="post">
        <input type="text" name="idMov" placeholder="id movimiento"><br><br>
        <input type="text" name="idPro" placeholder="id producto"><br><br>
        <input type="text" name="tipoMov" placeholder="tipo de movimiento 1-5"><br><br>        
        <input type="text" name="cantidad" placeholder="cantidad"><br><br>
        <input type="text" name="precio" placeholder="precio Unitario"><br><br>        
        <input type="date" name="fecha" placeholder="fecha"><br><br>
        <input type="submit" value="registrar" name="registrar">        
    </form>
    <br><br>
    <h3>editar producto</h3>
    <form action="actualizacion.php" method="post">    
        <input type="text" name="id" placeholder="id producto"><br><br>
        <input type="text" name="nombre" placeholder="nombre"><br><br>
        <input type="text" name="descripcion" placeholder="descripcion"><br><br>
        <input type="submit" value="actualizar" name="actualizar">
    </form>

    <h3>Mostrar Productos</h3>
    <form action="actualizacion.php" method="post">  
        
        <input type="submit" value="reporte" name="actualizar">
    </form>
    

</body>
</html>