<?php include("controllers/arrayCatalogo.php") ?>

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

<body>
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

	<!-- header cupcakes -->
	<header id="ofertas-cupcakes" class="vh-40">
		<img src="img/Categorias/Banner/4.png">
	</header>
	<!-- FINAL ofertas-->

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

	<!-- Catalogo -->
	<section id="catalogo" class="py-5">
		<div class="container">
			<div class="title text-center">
				<h2 class="position-relative d-inline-block">Nuestro catalogo</h2>
			</div>
			<div class="subtitulo text-center">
				<h3 class="subtitulo position-relative d-inline-block">Explora nuestro catalogo y elige tus postres preferidos</h3>
			</div>
			<div class="row g-0 categoriasCata">
				<div class="col col-lg-3 text-start" id="MenuCat">
					<div class="Aside-anuncio"></div>
				</div>
				<!--PRODUCTOS-->
				<div class="col col-9 justify-content-center popular-list mt-4 row gx-0 gy-3 products-container">
					<!-------------------------------------------------->
					<?php foreach ($pan as $producto) { ?>
						<div class="col-md-6 col-lg-4 col-xl-3 p-2 panes product" data-name="p1">
							<div class="popular-img position-relative">
								<img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
							</div>
							<div class="text-center">
								<p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
								<span class="fw-bold d-block">$<?php echo htmlspecialchars($producto['Precio']); ?> </span>
								<span class="">Stock: <?php echo htmlspecialchars($producto['stock']); ?> </span>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!------------------------ -->
		<!-- DESCRIPCION PRODUCTO -->
		<!------------------------ -->
		<div class="products-preview">
			<!------------------------ -->
			<div class="preview" data-target="p1">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/1.png">
				<h3>Cupcake 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p2">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/2.png">
				<h3>Cupcake 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p3">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/3.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p4">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/4.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p5">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/5.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p6">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/6.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p7">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/7.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p8">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/8.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p9">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/1.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p10">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/2.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
			<div class="preview" data-target="p11">
				<i class="fas fa-times"></i>
				<img src="img/Lo mas popular/3.png">
				<h3>Cupcake numero 1</h3>
				<div class="estrellas">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
					<span>( 250 )</span>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, ipsam.</p>
				<div class="precio">$2.00</div>
				<div class="botones">
					<a href="#" class="comprar">Comprar</a>
					<a href="#" class="carritoP">Carrito</a>
				</div>
			</div>
			<!------------------------ -->
		</div>
		<!------------------------ -->

	</section>
	<!-- Catalogo -->

	<!-- ofertas cupcakes -->
	<section id="ofertas-cupcakes" class="vh-40">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/oferta 1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/oferta 2.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="img/oferta 3.png" class="d-block w-100" alt="...">
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
	</section>
	<!-- FINAL ofertas-->

	<!--Botón subir -->
	<i class="ir-arriba fas fa-chevron-up"></i>
	<!--FINAL botón subir -->

	<!-- Suscribete -->
	<section id="suscribete" class="py-5">
		<div class="container">
			<div class="d-flex flex-column align-items-center justify-content-center">
				<div class="title text-centerpt-3 pb-5">
					<h2 class="position-relative d-inline-block ms-4">Suscribete</h2>
				</div>

				<p class="text-center text-muted">No te pierdas de información valiosa sobre descuentos, promociones y mucho más de parte de Rosa Aperlado. Dar clic al botón de abajo para comenzar a ser parte del mundo Aperlado.</p>
				<div class="input-group mb-3 mt-3">
					<input type="text" class="form-control" placeholder="Ingresa tu correo ...">
					<button class="btn btn-primary" type="submit">Suscribete</button>
				</div>
			</div>
		</div>
	</section>
	<!-- FINAL suscribete -->

	<?php include("includes/footer.php") ?>
	<!-- FINAL footer-->

	<!-- Jquery -->
	<script src="js/jquery-3.6.0.js"></script>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- custom js -->
	<script src="js/script.js"></script>
	<script src="js/script-catalogo.js"></script>
	<!-- slider categorias js -->
	<script src="js/lightslider.js"></script>
</body>

</html>