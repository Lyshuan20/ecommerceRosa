<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-4 ">
		<div class="container">
			<a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">
				<img src="img/ROSAAPERLADO.png" alt="site icon">
				<span class="font-icono">Rosa aperlado</span>
			</a>

            <!-- CARRITO -->
			<div class="order-lg-2 nav-btns">
				<button type="button" class="position-relative">
                    <a class="nav-link text-uppercase text-dark" href="registroUsuario.php">Registrate</a>
				</button>
				<button type="button" class="position-relative">
                <a class="nav-link text-uppercase text-dark" href="login.php">Ingresa</a>
				</button>
			</div>
			

			<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse order-lg-1" id="navMenu">
				<ul class="navbar-nav mx-auto text-center">
					<li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="index.php">Inicio</a>
					</li>
					<li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="Mesa_Postres.php">Mesa de postres</a>
					</li>
					<li class="nav-item dropdown px-2 py-2">
						<a class="nav-link dropdown-toggle text-uppercase text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Catalogo
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="galletas.php">Galletas</a></li>
							<li><a class="dropdown-item" href="pays.php">Pays</a></li>
							<li><a class="dropdown-item" href="panes.php">Panes</a></li>
							<li><a class="dropdown-item" href="cupcakes.php">Cupcakes</a></li>
							<li><a class="dropdown-item" href="canapes.php">Canapes</a></li>
							<li><a class="dropdown-item" href="otros.php">Otros</a></li>
						</ul>
					</li>
					<li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="Contactanos.php">Contactanos</a>
					</li>
                    <!--
                    <li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="Mesa_Postres.php">Crea tu cuenta</a>
					</li>
                    <li class="nav-item px-2 py-2">
						<a class="nav-link text-uppercase text-dark" href="Mesa_Postres.php">Ingresa</a>
					</li>
-->
				</ul>
			</div>
		</div>
	</nav>
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

	
	<!-- FINAL Headear-->