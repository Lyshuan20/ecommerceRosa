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
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 ">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="index.php">
                <img src="img/ROSAAPERLADO.png" alt="site icon">
                <span class="font-icono">Rosa aperlado</span>
            </a>

            <div class="order-lg-2 nav-btns">
                <button type="button" class="btn position-relative">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
                </button>
                <button type="button" class="btn position-relative">
                    <i class="fa fa-user"></i>
                </button>
                <div id="ctn-icon-search">
                    <button type="button" class="btn position-relative">
                        <i class="fa fa-search" id="icon-search"></i>
                    </button>
                </div>
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
                        <a class="nav-link text-uppercase text-dark" href="Mesa_Postres.html">Mesa de postres</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="catalogo.php">Catálogo</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="Contactanos.php">Contactanos</a>
                    </li>
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

    <!-- Headear catalogo -->
    <header id="header-catalogo" class="vh-40">
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
    </header>
    <!-- FINAL Headear-->

    <!-- Catalogo -->
    <section id="catalogo" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">Nuestro catalogo</h2>
            </div>
            <div class="subtitulo text-center">
                <h3 class="subtitulo position-relative d-inline-block">Explora nuestro catalogo y elige tus postres
                    preferidos</h3>
            </div>
            <!--  CATEGORIAS -->
            <div class="row g-0 categoriasCata">
                <div class="col col-lg-3 text-start" id="MenuCat">
                    <h3 class="categoriah3">Categorias</h3>
                    <ul class="nav flex-column filtro-categorias">

                        <li class="nav-item" data-filter="*">
                            <a class="nav-link text-muted categorias-catalogo">Todo</a>
                        </li>
                        <li class="nav-item" data-filter=".galletas">
                            <a class="nav-link text-muted categorias-catalogo">Galletas</a>
                        </li>
                        <li class="nav-item" data-filter=".pays">
                            <a class="nav-link text-muted categorias-catalogo">Pays</a>
                        </li>
                        <li class="nav-item" data-filter=".panes">
                            <a class="nav-link text-muted categorias-catalogo">Panes</a>
                        </li>
                        <li class="nav-item" data-filter=".cupcakes">
                            <a class="nav-link text-muted categorias-catalogo">Cupcakes</a>
                        </li>
                        <li class="nav-item" data-filter=".macarrones">
                            <a class="nav-link text-muted categorias-catalogo">Macarrones</a>
                        </li>
                        <li class="nav-item" data-filter=".canapes">
                            <a class="nav-link text-muted categorias-catalogo">Canapes</a>
                        </li>
                        <li class="nav-item" data-filter=".otros">
                            <a class="nav-link text-muted categorias-catalogo">Otros</a>
                        </li>
                    </ul>
                </div>
                <!--PRODUCTOS-->
                <div class="col col-9 justify-content-center popular-list mt-4 row gx-0 gy-3 products-container">
                    <!-------------------------------------------------->
                    <?php foreach ($galletas as $producto) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 galletas product" data-name="p1">
                            <div class="popular-img position-relative">
                                <img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
                            </div>
                            <div class="text-center">
                                <p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
                                <span class="fw-bold d-block"> <?php echo htmlspecialchars($producto['TipoDePostre']); ?> </span>
                            </div>
                        </div>
                    <?php } ?>
                    <!-------------------------------------------------->
                    <?php foreach ($cupcakes as $producto) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 cupcakes product" data-name="p1">
                            <div class="popular-img position-relative">
                                <img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
                            </div>
                            <div class="text-center">
                                <p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
                                <span class="fw-bold d-block"> <?php echo htmlspecialchars($producto['TipoDePostre']); ?> </span>
                            </div>
                        </div>
                    <?php } ?>
                    <!-------------------------------------------------->
                    <?php foreach ($pays as $producto) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 pays product" data-name="p1">
                            <div class="popular-img position-relative">
                                <img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
                            </div>
                            <div class="text-center">
                                <p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
                                <span class="fw-bold d-block"> <?php echo htmlspecialchars($producto['TipoDePostre']); ?> </span>
                            </div>
                        </div>
                    <?php } ?>
                    <!-------------------------------------------------->
                    <?php foreach ($pan as $producto) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 panes product" data-name="p1">
                            <div class="popular-img position-relative">
                                <img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
                            </div>
                            <div class="text-center">
                                <p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
                                <span class="fw-bold d-block"> <?php echo htmlspecialchars($producto['TipoDePostre']); ?> </span>
                            </div>
                        </div>
                    <?php } ?>
                    <!-------------------------------------------------->
                    <?php foreach ($otros as $producto) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 otros product" data-name="p1">
                            <div class="popular-img position-relative">
                                <img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
                            </div>
                            <div class="text-center">
                                <p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
                                <span class="fw-bold d-block"> <?php echo htmlspecialchars($producto['TipoDePostre']); ?> </span>
                            </div>
                        </div>
                    <?php } ?>
                    <!-------------------------------------------------->
                    <?php foreach ($canapes as $producto) { ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 p-2 canapes product" data-name="p1">
                            <div class="popular-img position-relative">
                                <img src="<?php echo htmlspecialchars($producto['ImagenProducto']); ?>" class="w-100" style="height: 150px;">
                            </div>
                            <div class="text-center">
                                <p class="text-none mt-3 mb-1"><?php echo htmlspecialchars($producto['NombreProd']); ?> <?php echo htmlspecialchars($producto['NombreSabor']); ?></p>
                                <span class="fw-bold d-block"> <?php echo htmlspecialchars($producto['TipoDePostre']); ?> </span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="catalogo_pag_2.php">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="catalogo.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="catalogo_pag_2.php">2</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="catalogo_pag_3.php">3</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link next2">Next</a>
                    </li>
                </ul>
            </nav>
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
    <!--Botón subir -->
    <i class="ir-arriba fas fa-chevron-up"></i>
    <!--FINAL botón subir -->
    <!-- Footer -->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="row text-white g-4">
                <div class="col-md-6 col-lg-3">
                    <a class="text-uppercase text-decoration-none brand text-white" href="index.php">Rosa aperlado</a>
                    <p class="text-white text-muted mt-3">Amor al dulce. Encantando paladares</p>
                    <img src="img/ROSAAPERLADO.png" class="iconoFooter">
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light">Links</h5>
                    <ul class="list-unstyled">
                        <li class="my-3">
                            <a href="index.php" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Inicio
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="Mesa_Postres.html" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Personalizar pedido
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="catalogo.php" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Catálogo
                            </a>
                        </li>
                        <li class="my-3">
                            <a href="Contactanos.php" class="text-white text-decoration-none text-muted">
                                <i class="fas fa-chevron-right me-1"></i>Contáctanos
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Encuéntranos</h5>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-map-marked-alt"></i>
                        </span>
                        <span class="fw-light">
                            <a href="https://goo.gl/maps/bL6JEp7ApNSdgagh6" target="_blank" class="fw-light" style="text-decoration: none;color: #666f77;">1271 Playa Blanca Poniente, Zapopan,
                                Mexico</a>
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="fw-light">
                            <a href="mailto:perlamg00@hotmail.com" target="_blank" class="fw-light" style="text-decoration: none;color: #666f77;">perlamg00@hotmail.com</a>
                        </span>
                    </div>
                    <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class="me-3">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <span class="fw-light">
                            <a href="tel:33 1408 2219" class="fw-light" style="text-decoration: none;color: #666f77;">33
                                1408 2219</a>
                        </span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <h5 class="fw-light mb-3">Síguenos</h5>
                    <div>
                        <ul class="list-unstyled d-flex">
                            <li>
                                <a href="https://www.facebook.com/amoraldulce" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/rosaaperlado/" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=3314082219" class="text-white text-decoration-none text-muted fs-4 me-4" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
</body>

</html>