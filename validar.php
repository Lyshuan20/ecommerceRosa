<?php 

include('controllers/conexion.php');
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


//Variable de sesion con el usuario ingresado en login
$_SESSION['usuario'] = $usuario;


$query = "SELECT * FROM tclientes WHERE nombreUsuario = '$usuario' and contrasena = '$pass'";

$result = mysqli_query($conn, $query);
$columna = mysqli_fetch_array($result);

if (mysqli_num_rows($result)>0){
	$rol = $columna['tipoUsuario'];
	if ($rol == 1) {
		header('Location: admin.php');
	}else{
        $_SESSION['message'] = 'Inicio de Sesion Satisfactorio!!!!';
	$_SESSION['message_type'] = 'success';
		header('Location: index.php');

	}
	
}else {

	$_SESSION['message'] = 'Usuario o contraseña incorrecta';
	header('Location: login.php');
	
}

?>