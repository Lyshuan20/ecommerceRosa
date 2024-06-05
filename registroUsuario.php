<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro de usuario</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/main.css">
</head>
<body class="body-regist">

<?php include("includes/header.php");?>
<div class="col-12"><?php if (isset($_SESSION['message'])) { ?>
					<div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
						<?= $_SESSION['message']?>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
					<?php session_unset();} ?></div>

<header class="header">
  <h1 class="header__title">Crea tu cuenta</h1>
</header>
<div class="content">

    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Información de usuario</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Dirección</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Crear cuenta</button>
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">

            <form class="multisteps-form__form" action="registrar_usuario.php" method="POST">
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Información de Usuario</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                      <input class="multisteps-form__input form-control" type="text" name="nombre" onkeyup="this.value = this.value.toUpperCase();" required placeholder="Nombre Completo"/>
                    </div>
                   
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" name="usuario" required placeholder="Nombre de usuario"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="email" name="email" required placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="password" name="pass" required placeholder="Contraseña"/>
                    </div>
                    
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Tu dirección</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" name="calleynum" onkeyup="this.value = this.value.toUpperCase();" required placeholder="Calle y número"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" name="colonia" onkeyup="this.value = this.value.toUpperCase();" required placeholder="Colonia"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" name="cp" onkeyup="this.value = this.value.toUpperCase();" required placeholder="Código Postal"/>
                    </div>
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" name="ciudad" onkeyup="this.value = this.value.toUpperCase();" required placeholder="Ciudad"/>
                    </div>
                    
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" name="estado" onkeyup="this.value = this.value.toUpperCase();" required placeholder="Estado"/>
                    </div>
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" name="pais" onkeyup="this.value = this.value.toUpperCase();" required placeholder="País"/>
                    </div>
                    
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Siguiente</button>
                  </div>
                </div>
              </div>

              

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Crea tu Usuario</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <p>Si necesitas cambiar información, haz clic en "Anterior"</p>
                    <p>Verifica que todos los campos estén llenos para registrarte</p>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Anterior</button>
                    <button class="btn btn-success ml-auto" type="submit" title="Send" name="registrar_usuario">Registrarte</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script  src="function.js"></script>

</body>
</html>
