<?php
    session_start();
    $hostname = "localhost";
    $database = "bd_reposteria_rosaaperlado";
    $username = "root";
    $password = "1234";

    $conn = mysqli_connect($hostname, $username, $password, $database);

?>