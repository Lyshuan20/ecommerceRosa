<?php 

include 'controllers/conexion.php';

if (isset($_POST['registrar_usuario'])) {

	$nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
	$pass = $_POST['pass'];
    $calleynum = $_POST['calleynum'];
    $colonia = $_POST['colonia'];
    $cp = $_POST['cp'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
	$rol = 2;

    //Primer paso para insertar un usuario: Insertar la direccion completa en tdireccion 
	// y guardamos el id  de la direccion insertada

	$query = "INSERT INTO tdireccion(calleynum,colonia,codigoPostal,ciudad,estado,pais) VALUES ('$calleynum', '$colonia', '$cp','$ciudad',
    '$estado','$pais')";
	$resultado1 = mysqli_query($conn, $query);
    $id_direccion = mysqli_insert_id($conn);
    
    //En caso de que se inserte la direcccion, puede insertarse el correo electronico 
	// y guardamos el id  del insertado

    if ($resultado1 == 1) {
	$query = "INSERT INTO tcorreos(Correo) VALUES ('$email')";
	$resultado2 = mysqli_query($conn, $query);
    $id_correo = mysqli_insert_id($conn);
    //Finalmente si se inserta el correo, insertamos al usuario

    if($resultado2 == 1){
    $query = "INSERT INTO tclientes(tipoUsuario,Nombre,nombreUsuario,contrasena,Id_TCorreos,id_Tdirecciones) VALUES ('$rol','$nombre',
    '$usuario','$pass','$id_correo','$id_direccion')";
	$resultado3 = mysqli_query($conn, $query);
        if($resultado3 == 1){
            session_start();
            $destino = $email;
    
        $contenido = "Su registro de usuario en Rosa Aperlado fue satisfactorio". " \nSu nombre de usuario es: ".  $usuario." \nSu contraseña es: ".  $pass;

	    mail($destino,"Registro a Rosa Aperlado",$contenido);
            $_SESSION['message'] = 'Registro de cuenta satisfactorio';
            $_SESSION['message_type'] = 'success';
            header("Location: login.php");

        }
    }

	}else{
        die("NO SE PUDO INSERTAR LA DIRECCION");
    }


    

}

?>