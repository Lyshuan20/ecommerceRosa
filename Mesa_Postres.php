<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rosa aperlado</title>
	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- Custom css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- css Slider-->
	<link rel="stylesheet" href="css/lightslider.css">
</head>

<body class="Mesa_postres__body">

	<!-- HEADER DE LA PÁGINA -->
<?php
include("includes/header.php");
?>


	<!-- BUSCADOR INTERNO -->
	<div id="ctn-bars-search">
		<input type="text" id="inputSearch" placeholder="¿Que deseas buscar?">
	</div>

	<ul class="list-unstyled" id="box-search">
		<li><a class="text-decoration-none" href="#"><i class="fa fa-search"></i>Pasteles</a></li>
		<li><a class="text-decoration-none" href="#"><i class="fa fa-search"></i>Galletas</a></li>
		<li><a class="text-decoration-none" href="#"><i class="fa fa-search"></i>Cupcake</a></li>
		<li><a class="text-decoration-none" href="#"><i class="fa fa-search"></i>Pays</a></li>
	</ul>

	<div id="cover-ctn-search"></div>
	<!-- FINAL Navbar -->

	<!-- MESA DE POSTRES -->

	<section id="MesaPostres" class="MesaPostres">
		<div class="imgMP"></div>
		<div class="contenedor_MP">
			<div class="titleMP">Ordena tu mesa de postres</div>
			<form class="form_MP" action="#">
				<div class="postre-detalles">
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Nombre completo</span>
						<input id="nombre" type="text" placeholder="Ingrese su nombre" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">WhatsApp</span>
						<input id="telefono" type="text" placeholder="Ingrese tu número celular" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Dirección del evento</span>
						<input id="direccion" type="text" placeholder="Ingrese dirección del evento" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Tipo de evento</span>
						<select id="tipo_evento">
							<option selected disabled value>- selecciona un evento -</option>
							<option>Boda</option>
							<option>Bautizo</option>
							<option>Quinceañera</option>
							<option>Primera comunión</option>
							<option>Cumpleaños</option>
						</select>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Fecha del evento</span>
						<input id="fecha_evento" type="date" placeholder="Ingrese su nombre" required>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Decoración de la mesa</span>
						<select id="decoracion_MP" name="decoracion_mesa">
							<option selected disabled value>- selecciona una decoración -</option>
							<option>Flores de papel</option>
							<option>Medio arco con flores</option>
							<option>Medio arco con globos</option>
						</select>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Color mobiliario</span>
						<select id="color_mobiliario" name="color_mobiliario">
							<option selected disabled value>- selecciona un color -</option>
							<option>Color blanco</option>
							<option>Color nogal</option>
						</select>
					</div>
					<!-- ------------------ -->
					<div class="input-box">
						<span class="detalles">Cantidad de postres</span>
						<select id="cantidad_MP" name="cantidad_postres">
							<option selected disabled value>- selecciona cantidad -</option>
							<option>150</option>
							<option>210</option>
							<option>300</option>
							<option>450</option>
						</select>
					</div>
					<!-- FIN DE LOS INPUT BOX-->
				</div>
				<div class="btnMP">
					<input id="enviarMP" type="submit" name="" value="Enviar">
				</div>
			</form>
		</div>

	</section>
	<!-- FINAL MESA DE POSTRES -->

	<?php include("includes/footer.php") ?>

	<!-- Jquery -->
	<script src="js/jquery-3.6.0.js"></script>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- custom js -->
	<script src="js/script.js"></script>
	<script src="js/script-MP.js"></script>
	<!-- slider categorias js -->
	<script src="js/lightslider.js"></script>

</body>

</html>