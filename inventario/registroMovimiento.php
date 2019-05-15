<?php
    class Basis{
        var $cnx;
        function Basis(){
            $this->cnx = mysqli_connect("localhost", "root", "");
            mysqli_select_db($this->cnx, "inventario") or die("no se pudo conectar con la base de datos");
        }
    
        function registrar($idMov, $idPro, $tipoMov, $cantidad, $precio, $fecha){
            $reg = "INSERT INTO movimiento VALUES('$idMov', '$cantidad', '$precio', '$fecha', '$idPro', '$tipoMov');";            

            if (mysqli_query($this->cnx, $reg)) {
                echo "registro de movimiento exitoso";
            } else {
                echo "error al registrar el movimiento";
            }
        }

        function actualizarNombre($id, $nombre){
            $sel = "SELECT * FROM producto WHERE id = '$id'";

            if (mysqli_query($this->cnx, $sel)) {
                global $id;
                global $nombre;
                $up = "UPDATE producto SET nombre = '$nombre' WHERE id = '$id'"; 
                if (mysqli_query($this->cnx, $up)){
                    echo "modificacion exitosa del nombre <br>";
                } else{
                    echo "no se pudo modificar el nombre";
                }
            } else {
                echo "el producto no se encuentra registrado";
            }
        }

        function actualizarDesc($id, $desc){
            $sel = "SELECT * FROM producto WHERE id = '$id'";

            if (mysqli_query($this->cnx, $sel)) {
                global $desc;
                global $id;
                $up = "UPDATE producto SET descripcion = '$desc' WHERE id = '$id'"; 
                if (mysqli_query($this->cnx, $up)){
                    echo "modificacion exitosa de la descripcion <br>";
                } else{
                    echo "no se pudo modificar la descripcion";
                }
            } else {
                echo "el producto no se encuentra registrado";
            }
        }

        // function mostrarTodo(){
        //     $sel = "SELECT * FROM producto";
        //     if ($result = mysqli_query($this->cnx, $sel)) {
        //         echo "<table>
        //                 <tr>
        //                     <th>Id</th>
        //                     <th>Nombre</th>
        //                     <th>Descripcion</th>
        //                 </tr>";
        //         while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        //             echo ""
        //         }
        //     } else {
        //         echo "error con el reporte de producto";
        //     }

        // }
        
    }
?>