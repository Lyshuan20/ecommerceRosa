<?php
include("controllers/CContactanos.php");
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
</head>
<!-- HEADER DE LA PÁGINA -->
<?php
include("includes/header.php");
?>

<body>

	

<!-- CONTACTO -->
<section id="contacto">
        <div class="contacto">
            <div class="container">
                <div class="mb-5 text-center">
                    <h5>¡Queremos escucharte!</h5>
                    <h2 class="fw-bold">Contáctanos</h2>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <h4 class="fw-bold">Información de contacto</h4>
                        <ul class="info list-unstyled">
                            <li class="d-flex align-items-center">                                
                                <p><span class="fas fa-map-marked-alt me-3"></span><a href="https://goo.gl/maps/bL6JEp7ApNSdgagh6" target="_blank" style="text-decoration: none;">1271 Playa Blanca Poniente, Zapopan, Mexico</a></p>
                            </li>
                            <li class="d-flex align-items-center">                                
                                <p><span class="fas fa-phone-alt me-3"></span><a href="tel:33 1408 2219" style="text-decoration: none;">33 1408 2219</a></p>
                            </li>
                            <li class="d-flex align-items-center">                                
                                <p><span class="fas fa-envelope me-3"></span><a href="mailto:perlamg00@hotmail.com" target="_blank" style="text-decoration: none;">perlamg00@hotmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 pt-lg-0 pt-md-0 pt-4">
                        <form method="POST" action="Contactanos.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Nombre" id="nombre" placeholder="Tu nombre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="CorreoContactanos" id="email" placeholder="Tu correo">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="textarea" name="Mensaje" cols="30" rows="4" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button name="contactar" class="btn-contacto" type="submit"><span class="pe-2 fs-5"></span>Envia tu mensaje</button>
                                </div>
                            </div>
                            <?php
            $userEmail = "";
            if (isset($_POST['contactar'])) {
                $userEmail = $_POST['correo'];
                if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                    $subject = "Suscripción Realizada!";
                    $message = "Hola $userEmail, gracias por suscribirte!. Al suscribirte tendrás cada semana notificaciones sobre noticias, novedades, boletín informativo y más. ¡Esperamos que disfrutes de nuestros servicios!. Saludos.";
                    $sender = "De: Equipo Rosa Aperlado - lfernandomc16@gmail.com";

                    if (mail($userEmail, $subject, $message, $sender)) {
            ?>
                        <?php
                        if ($contador == 0) {
                        ?><div class="alert alert-success" role="alert">
                                <strong><?php if ($contador == 0) {
                                            print $SUS;
                                        } ?></strong>
                            </div>
                        <?php
                        } else {
                        ?><div class="alert alert-danger" role="alert">
                                <strong><?php print $YASUS; ?></strong>
                            </div>
                        <?php
                        }
                        $userEmail = "";
                    } else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>¡Mensaje no Enviado!!.</strong>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-primary" role="alert">
                        <strong>¡Mensaje enviado!.<?php print $userEmail ?></strong>
                    </div>
            <?php
                }
            }
            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FINAL CONTACTO -->

	<?php include("includes/footer.php") ?>

	<!-- Jquery -->
	<script src="js/jquery-3.6.0.js"></script>
	<!-- Isotope js-->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- Bootstrap js -->
	<script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
	<!-- custom js -->
	<script src="js/script.js"></script>
</body>

</html>