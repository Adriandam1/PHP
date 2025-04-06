<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Probando HOla mundo</title>
</head>

<body>

<?php

	// ruta acceso: http://localhost/carpetaPrueba/holamundo.php
	echo "HOLA BIENVENIDO actualizate con un f5 lamp!";
	//salto lineaecho "<br>";
// cambio desde remoto
	// comentario una sola linea
	/*Comentarios varias lineas */
	# Comentario consola
	// Variable string
	$prueba = "variable prueba";
	// Variable integer
	$numero = 5;
	$Frase = "la frase es $prueba y $numero";
	$ProfesorTrue = true;
	$ProfesorFalse = false;


	print "<br/>Esto linea la hago con print";
	print "<br/>Esto linea la hago con print para hacer otro commit $prueba$numero<br/>";
	print $Frase;
	print "<br/>Contaneo texto con variable" . $Frase;
	print "<br/>Si el booleano es True mostrara1: ". $ProfesorTrue;
	print "<br/>Si el booleano es False no mostrara nada: ". $ProfesorFalse;
	print "<br/>Si el booleano es verdadero sale: " . json_encode ($ProfesorTrue);
	print "<br/>Si el booleano es falso sale: " . json_encode ($ProfesorFalse);
	echo "<br/>";

	// Constantes

	const PI = 3.14;
	// PI == 100; // Removed as it serves no purpose
	echo PI;

	define ("nombre","pepe");
	// nombre == "pepa"; // Removed as it serves no purpose
	echo "<br/>";
	echo nombre;
	echo "<br/>";
	// Variables paso URL a href
?>
<a href="destino.php?nombre=Adrian&cargo=Presidente">Pasar las variables destino a .php</a>
<?php


	// Arrays indexados y conceptos
	$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado", "Domingo");
	$numeros = array (10, 20, 30, 40);
	// Cuando a un array solo le paso un dato que es un numero, estoy haciendo un array vacio con x posiciones, en este caso 10 posiciones en las que no hay nada, solo esta reservando el espacio
	$nombre = array(10);
	// si quiero generar un array vacio:
	$datos = array();
	// array sintaxsis corta:
	$valores = [10, 20, 30, 40];

	// como accedo a los elementos, escribo el nombre del array y entre corchetes la posicion:
	echo "<br/>";
	echo $dias[2];
	// var_dump permite mostrar el tipo de variable de una variable definida y su contenido
	echo "<br/>";
	var_dump ($dias);
	echo "<br/>";
	var_dump ($numeros);
	echo "<br/>";

	// Arrays asociativos (ojito que los String son caseSensitive)
	$navegadores = array("navegador1" => "Chrome", "navegador2" => "Firefox", "navegador3" => "Safari");
	// Puedo hacer arrays con valores de distintos tipos: string, int, bool
	$datos2 = array ("nombre" => "Adrian", "puntuacion" => 100, "estudiantes" => true);

	echo "Navegador 3: " . $navegadores['navegador3'];

	echo "<br/>";

	echo "Nombre: " . $datos2["nombre"], "<br/>Puntuacion: " . $datos2['puntuacion'], "<br/>Estudiante? " . $datos2['estudiantes'];




?>

</body>
</html>
