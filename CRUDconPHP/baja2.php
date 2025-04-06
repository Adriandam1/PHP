<?php 
// Como tenemos que acceder a la BD para consultar datos tenemos que incluir la conexion
include "conexion.php";

// seleccionamos la base de datos
mysqli_select_db($conexion, "productosbd");

// necesito saber cual es el producto que quiero eliminar
$productoborrar = $_GET['id'];
$borrar = "DELETE FROM productos WHERE id = $productoborrar";
mysqli_query($conexion, $borrar);
header("Location: baja_ok.php");

?>