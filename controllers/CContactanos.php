<?php

use Doctrine\Common\Collections\Expr\Value;

    include("conexion.php");

    if(isset($_POST['contactar'])){
        error_reporting(0);
        $nombre = $_POST['Nombre'];
        $correo_electronico= $_POST['CorreoContactanos'];
        $mm = $_POST['Mensaje'];
        $correo_pasteleria = "lyshuan03_nv@hotmail.com";
        $mensaje = "Este mensaje fue enviado por: \r\n" . $nombre . " \r\n\r\n";
        $mensaje .= "Su e-mail es: \r\n" . $correo_electronico . " \r\n\r\n";
        $mensaje .="Danos tu opinion: \r\n".$_POST['Mensaje'] . " \r\n\r\n";

        $correo_electronico = $_POST['CorreoContactanos'];
        $asunto = 'Pasteleria Rosa Aperlado';

        mail($correo_pasteleria, $asunto, utf8_decode($mensaje), $header);        

        $insertar = mysqli_query($conn, "INSERT INTO TContactanos (Nombre,CorreoContactanos,Mensaje) VALUES ('$nombre','$correo_electronico','$mm')");
    }
  
?>