<?php

  include("conexion.php");

  $sqlProductosCatalogo = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores"; 
  $sqlCupcakes = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (17, 18, 19)";
  $sqlPays = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (4, 5, 6, 7, 8, 9)";
  $sqlGalletas = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (1, 2, 3, 21, 22, 24)";
  $sqlPan = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (10, 11, 12, 13)";
  $sqlOtros = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (14, 15, 16, 20, 25)";
  $sqlCanapes = "SELECT * FROM TProductos tp INNER JOIN TTiposSabores tt ON tp.TiposSabores = tt.Id_TTiposSabores WHERE Id_TProductos IN (26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40)";

  $resulProductosCatalogo = mysqli_query($conn, $sqlProductosCatalogo);
  $resulCupcakes = mysqli_query($conn, $sqlCupcakes);
  $resulCanapes = mysqli_query($conn, $sqlCanapes);
  $resulPays = mysqli_query($conn, $sqlPays);
  $resulGalletas = mysqli_query($conn, $sqlGalletas);
  $resulPan = mysqli_query($conn, $sqlPan);
  $resulOtros = mysqli_query($conn, $sqlOtros);

  $todo = mysqli_fetch_all($resulProductosCatalogo, MYSQLI_ASSOC);
  $cupcakes = mysqli_fetch_all($resulCupcakes, MYSQLI_ASSOC);
  $canapes = mysqli_fetch_all($resulCanapes, MYSQLI_ASSOC);
  $pays = mysqli_fetch_all($resulPays, MYSQLI_ASSOC);
  $galletas = mysqli_fetch_all($resulGalletas, MYSQLI_ASSOC);
  $pan = mysqli_fetch_all($resulPan, MYSQLI_ASSOC);
  $otros = mysqli_fetch_all($resulOtros, MYSQLI_ASSOC);

  mysqli_free_result($resulProductosCatalogo);
  mysqli_free_result($resulCupcakes);
  mysqli_free_result($resulCanapes);
  mysqli_free_result($resulPays);
  mysqli_free_result($resulGalletas);
  mysqli_free_result($resulPan);
  mysqli_free_result($resulOtros);
  
  mysqli_close($conn);

?>