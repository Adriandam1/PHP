<?php

// http://localhost/phpmyadmin usuario: accesodatos password: admin


$servidor = "localhost";
$usuario = "accesodatos";
$password = "admin";
$conexion = mysqli_connect($servidor, $usuario, $password) or die("Error de conexion: " . mysqli_error($conexion));

// Crear base de datos productosbd
$sql1 ="CREATE DATABASE productosbd";
// Conectamos a la base de datos productosbd
mysqli_query($conexion, $sql1) or die("Error al crear la base de datos: ");

// Seleccionar la base de datos productosbd y conectamos a ella
mysqli_select_db($conexion, "productosbd") or die("Error al seleccionar la base de datos: ");

// Crear tabla productos
// La tabla productos tiene los siguientes campos:
$sql2 = "CREATE TABLE productos (
    id INT(11) PRIMARY KEY,
    nombre VARCHAR(50),
    descripcion VARCHAR(255),
    precio INT(11),
    fotografia BLOB
)";
// Conectamos a la base de datos productosbd y creamos la tabla productos
mysqli_query($conexion, $sql2) or die("Error al crear la tabla: ");

// Vamos a la direccion del archivo: http://localhost/CRUDconPHP/crearManual.php
// comprobamos en phpmyadmin que se ha creado la base de datos productosbd y la tabla productos
// http://localhost/phpmyadmin usuario: accesodatos password: admin
//tamebin podria ser mas facil crear la base de datos y la tabla desde phpmyadmin
// y luego solo insertar los datos desde el formulario

?>
