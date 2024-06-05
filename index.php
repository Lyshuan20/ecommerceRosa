<?php
include("controllers/arrayTopVentas.php");

include("controllers/suscribirse.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rosa aperlado</title>
	<!-- fontawesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Bootstrap css -->
	<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<!-- Custom css -->
	<link rel="stylesheet" href="css/main.css">
	<!-- css Slider-->
	<link rel="stylesheet" href="css/lightslider.css">
</head>
<!-- HEADER DE LA PÁGINA -->
<?php include("includes/header.php");?>
<!-- Header-->
<div class="col-12">
<?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
						<?= $_SESSION['message']?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php session_unset();} ?>
</div>
<header id="header" class="vh-100">
		<div class="container h-100 d-flex align-items-center justify-content-center">
			<div class="text-center itemBanner">
				<h2 class="text-capitalize text-black">Rosa aperlado</h2>
				<h1 class="text-uppercase fw-bold text-black ">Amor al dulce</h1>
				<a href="galletas.php" class="btn mt-3 text-uppercase">Ver más</a>
			</div>
		</div>
	</header>
<body>

	

	<!--CATEGORIAS -->
	<section class="categoria-index section-p1">

		<ul id="autoWidth" class="cs-hidden">
			<!---1--------------------------->
			<li class="item">
				<!--caja de categoria-->
				<div class="categoria-caja">
					<a href="galletas.php">
						<img src="img/Categorias/1.png">
					</a>
				</div>
				<!--Texto-->
				<span>Galletas</span>
			</li>
			<!---2--------------------------->
			<li class="item">
				<!--caja de categoria-->
				<div class="categoria-caja">
					<a href="pays.php">
						<img src="img/Categorias/2.png">
					</a>
				</div>
				<!--Texto-->
				<span>Pays</span>
			</li>
			<!---3--------------------------->
			<li class="item">
				<!--caja de categoria-->
				<div class="categoria-caja">
					<a href="panes.php">
						<img src="img/Categorias/3.png">
					</a>
				</div>
				<!--Texto-->
				<span>Panes</span>
			</li>
			<!---4--------------------------->
			<li class="item">
				<!--caja de categoria-->
				<div class="categoria-caja">
					<a href="cupcakes.php">
						<img src="img/Categorias/4.png">
					</a>
				</div>
				<!--Texto-->
				<span>Cupcakes</span>
			</li>
			<!---5--------------------------->
			<!---6--------------------------->
			<li class="item">
				<!--caja de categoria-->
				<div class="categoria-caja">
					<a href="canapes.php">
						<img src="img/Categorias/6.png">
					</a>
				</div>
				<!--Texto-->
				<span>Canapes</span>
			</li>
			<!---7--------------------------->
			<li class="item">
				<!--caja de categoria-->
				<div class="categoria-caja">
					<a href="otros.php">
						<img src="img/Categorias/7.png">
					</a>
				</div>
				<!--Texto-->
				<span>Otros</span>
			</li>
		</ul>

	</section>

	<!-- FINAL CATEGORIAS -->

	<!-- Lo más popular -->
	<section id="popular" class="py-5">
		<div class="container">
			<div class="title text-center">
				<h2 class="position-relative d-inline-block">Lo más vendido</h2>
			</div>
			<div class="row g-0">
				<div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
					<button type="button" class="btn m-2 active-filter-btn" data-filter="*">Todo</button>
					<button type="button" class="btn m-2 " data-filter=".cupcakes">Cupcakes</button>
					<button type="button" class="btn m-2" data-filter=".tapas">Tapas</button>
					<button type="button" class="btn m-2" data-filter=".pays">Pays</button>
				</div>

				<div class="popular-list mt-4 row gx-0 gy-3">
					<?php foreach ($cupcakes as $producto) { ?>
						<div class="col-md-6 col-lg-4 col-xl-3 p-2 cupcakes">
							<div class="popular-img position-relative">
								<img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 200px;">
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="far fa-star"></i></span>
								</div>
								<p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
								<span class="fw-bold d-block">$<?php echo htmlspecialchars($producto['Precio']); ?> </span>

							</div>
						</div>
					<?php } ?>

					<?php foreach ($tapas as $producto) { ?>
						<div class="col-md-6 col-lg-4 col-xl-3 p-2 tapas">
							<div class="popular-img position-relative">
								<img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 200px;">
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="far fa-star"></i></span>
								</div>
								<p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
								<span class="fw-bold d-block">$<?php echo htmlspecialchars($producto['Precio']); ?> </span>

							</div>
						</div>
					<?php } ?>

					<?php foreach ($pays as $producto) { ?>
						<div class="col-md-6 col-lg-4 col-xl-3 p-2 pays">
							<div class="popular-img position-relative">
								<img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 200px;">
							</div>
							<div class="text-center">
								<div class="rating mt-3">
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="fas fa-star"></i></span>
									<span class="text-primary"><i class="far fa-star"></i></span>
								</div>
								<p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
								<span class="fw-bold d-block">$<?php echo htmlspecialchars($producto['Precio']); ?> </span>

							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</section>
	<!-- FINAL lo más popular-->

	<!-- TESTIMONIOS -->
    <section id="testimonios" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">Clientes satisfechos</h2>
            </div>
            <!-- Caja de testimonios -->
            <div class="testimonial-box-container mt-5">
                <!-- Caja 1 -->
                <div class="testimonial-box">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Falexa.cosmet.1%2Fposts%2F789617301766727&show_text=true&width=500" width="100%" height="175px" style="overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <!-- Caja 2 -->
                <div class="testimonial-box">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Falexandra.menmaya.7%2Fposts%2F2504256989844772&show_text=true&width=500" width="100%" height="175px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <!-- Caja 3 -->
                <div class="testimonial-box">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjezaldaz%2Fposts%2F10156958214640129&show_text=true&width=500" width="100%" height="175px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <!-- Caja 4 -->
                <div class="testimonial-box">
                    <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkatya.veronica%2Fposts%2F10218612626042199&show_text=true&width=500" width="100%" height="175px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- FINAL TESTIMONIOS -->

	<!-- OFERTAS -->
	<section id="ofertas" class="py-5">
		<div class="container">
			<div class="row d-flex align-items-center text-center">
				<div class="ofertas-content">
					<span class="text-white">Descuento de hasta 40%</span>
					<h2 class="mt-2 mb-4 text-white">Gran venta y ofertas</h2>
					<a href="catalogo.html" class="btn">Comprar ahora</a>
				</div>
			</div>
		</div>
	</section>
	<!-- FINAL OFERTAS -->

	<!-- Sobre nosotros -->
	<section id="SobreNosotros" class="py-5">
		<div class="container">
			<div class="row gy-lg-5 align-items-center">
				<div class="col-lg-6 order-lg-1 text-center text-lg-start">
					<div class="title pt-3 pb-5">
						<h2 class="position-relative d-inline-block ms-4">Sobre nosotros</h2>
					</div>
					<p class="lead text-muted">Rosa Aperlado, amor al dulce. Encantando paladares.</p>
					<p>Somos una repostería especializada en la realización de una amplia gama de postres, desde pasteles, cupcakes y pays, hasta brownies, galletas y más. Especialistas en mesas de postres para tus eventos importantes, como bodas, bautizos, baby showers y más.</p>
				</div>
				<div class="col-lg-6 order-lg-0">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/evento 1.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/evento 2.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/evento 3.jpg" class="d-block w-100" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FINAL sobre nosotros-->

	<!-- Suscribete -->
    <section id="suscribete" class="py-5">
        <form action="index.php" method="POST" class="container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="title text-centerpt-3 pb-5">
                    <h2 class="position-relative d-inline-block ms-4">Suscríbete</h2>
                </div>

                <p class="text-center text-muted">No te pierdas de información valiosa sobre descuentos, promociones y mucho más de parte de Rosa Aperlado. Dar clic al botón de abajo para comenzar a ser parte del mundo Aperlado.</p>
                <div class="input-group mb-3 mt-3">
                    <input type="email" name="correo" class="form-control" placeholder="Ingresa tu correo ..." required value="<?php $userEmail = "";
                                                                                                                                echo $userEmail ?>" pattern="[a-zA-Z0-9._]{1,254}@(gmail|hotmail|live|outlook|yahoo|alumnos|udg)+(\.)(com|gob|mx|net)" title="Escribe un correo electrónico válido. Ejemplo: xxxx@gmail.com">
                    <button class="btn btn-primary" name="suscribir" type="submit" href="">Comenzar</button>
                </div>
            </div>
            <?php
            $userEmail = "";
            if (isset($_POST['suscribir'])) {
                $userEmail = $_POST['correo'];
                if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                    $subject = "Suscripción Realizada!";
                    $message = "Hola $userEmail, gracias por suscribirte!. Al suscribirte tendrás cada semana notificaciones sobre noticias, novedades, boletín informativo y más. ¡Esperamos que disfrutes de nuestros servicios!. Saludos.";
                    $sender = "De: Equipo Rosa Aperlado - fernandezraul057@gmail.com";

                    if (mail($userEmail, $subject, $message, $sender)) {
            ?>
                        <?php
                        if ($contador == 0) {
                        ?><div class="alert alert-success" role="alert">
                                <strong><?php if ($contador == 0) {
                                            echo $SUS;
                                        } ?></strong>
                            </div>
                        <?php
                        } else {
                        ?><div class="alert alert-danger" role="alert">
                                <strong><?php echo $YASUS; ?></strong>
                            </div>
                        <?php
                        }
                        $userEmail = "";
                    } else {
                        ?>
                        <div class="alert alert-primary" role="alert">
                            <strong>¡Suscripción Realizada!!</strong>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>¡Email Inválido: <?php echo $userEmail ?>!</strong>
                    </div>
            <?php
                }
            }
            ?>
        </form>
    </section>
    <!-- FINAL suscribete -->

	<!--Botón subir -->
	<i class="ir-arriba fas fa-chevron-up"></i>
	<!--FINAL botón subir -->

<?php include("includes/footer.php") ?>

	<!-- Jquery -->
	<script src="js/jquery-3.6.0.js"></script>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- custom js -->
	<script src="js/script.js"></script>
	<!-- slider categorias js -->
	<script src="js/lightslider.js"></script>
</body>

</html>