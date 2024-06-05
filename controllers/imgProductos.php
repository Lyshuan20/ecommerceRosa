<?php 

    include("conexion.php");

    if(!empty($_GET["Id_TProductos"])){

        $resultado = mysqli_query($conn, "SELECT ImagenProducto FROM TProductos WHERE Id_TProductos = {$_GET['Id_TProductos']}") or die(mysql_error());

        $contador = mysqli_num_rows($resultado);

        if($contador == 0){
            $datosImg = $resultado->fetch_assoc();

            header("Content-type: image/jpeg");
            echo $datosImg["ImagenProducto"];
        } else {
            echo "Imagen no encontrada";
        }

    }

?>