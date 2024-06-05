<?php

  include("conexion.php");

  $sqlProductos = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (4, 5, 6, 7, 17, 18, 19, 29, 30, 31, 32)"; 
  $sqlCupcakes = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (17, 18, 19)";
  $sqlTapas = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (29, 30, 31, 32)";
  $sqlPays = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (4, 5, 6, 7)";

  $resulProductos = mysqli_query($conn, $sqlProductos);
  $resulCupcakes = mysqli_query($conn, $sqlCupcakes);
  $resulTapas = mysqli_query($conn, $sqlTapas);
  $resulPays = mysqli_query($conn, $sqlPays);

  $productos = mysqli_fetch_all($resulProductos, MYSQLI_ASSOC);
  $cupcakes = mysqli_fetch_all($resulCupcakes, MYSQLI_ASSOC);
  $tapas = mysqli_fetch_all($resulTapas, MYSQLI_ASSOC);
  $pays = mysqli_fetch_all($resulPays, MYSQLI_ASSOC);

  mysqli_free_result($resulProductos);
  mysqli_free_result($resulCupcakes);
  mysqli_free_result($resulTapas);
  mysqli_free_result($resulPays);
  
  mysqli_close($conn);

?>