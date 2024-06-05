<?php 
include ("controllers/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de sesión</title>

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!--FrameWork de BootStrap para el estilo de la página-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

	<!--Iconos de tipo solid-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://kit.fontawesome.com/b3900d061a.js" crossorigin="anonymous"></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>

    <div class="container"><h1 class="text-center titulo-login">Inicio de Sesión</h1></div>
    
	<div class="modal-dialog text-center">
		<div class="col-sm-10 principal">
			<div class="modal-content">
				<div class="col-12 img-usuario">
					<img src="img/hombre.png" class="img-fluid">
				</div>
				<form action="validar.php" method="POST" class="col-12">
                <?php if (isset($_SESSION['message'])) { ?>
						<div class="container-fluid">
							<div class="fw-bold text-dark">
								<?= $_SESSION['message']?>
							</div>
						</div>
						<?php session_unset();} ?>
						<div class="form-group col-10 mx-auto" id="user-group">
							<img src="img/user.svg">
							<input required type="text" name="usuario" placeholder="NOMBRE DE USUARIO" class="form-control" id="user-group">
						</div>
						<div class="form-group col-10 mx-auto mt-2 mb-2" id="contrasena-group">
							<img src="img/lock.svg">
							<input required type="password" name="pass" placeholder="CONTRASEÑA" class="form-control" id="contrasena-group">
						</div>
						<button type="submit" class="btn btn-primary mb-2 p-2">
							<i class="fa-solid fa-right-to-bracket"></i>
							INGRESAR
						</button>
					</form>
					<div class="col-12 recordar-contraseña">
						<a href="#">
						</i>RECORDAR CONTRASEÑA</a>
					</div>
                    <div class="col-12 recordar-contraseña">
						<a href="index.php">

						</i>VOLVER</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Scripts-->
		<script src="js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" href="js/jquery.js"></script>
		<script type="text/javascript" href="js/bootstrap.min.js"></script>
		
	</body>
	</html>