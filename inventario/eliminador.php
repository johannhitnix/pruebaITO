<?php
    class Eliminador{
        var $cnx;
        function Eliminador(){
            $this->cnx = mysqli_connect("localhost", "root", "");
            mysqli_select_db($this->cnx, "inventario") or die("no se pudo conectar con la base de datos");
        }

        function Borrar($id){
            
            $del = "DELETE FROM producto WHERE id = '$id';";
            if (mysqli_query($this->cnx, $del)) {
                echo "eliminacion exitosa";
            } else {
                echo "fallo al eliminar el producto";
            }
            
        }
    }
?>