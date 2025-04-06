<?php

$servidor = "localhost";
$usuario = "accesodatos";
$password = "admin";
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexion: " . mysqli_error($conexion));

?>