<?php include "conexion.php"; ?>

<?php 

    mysqli_select_db($conexion, "productosbd") or die("Error de seleccion de base de datos: ");

    //var_dump($_POST);

    // Recibimos los datos del formulario
    $identificador = $_POST['identificador'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    //var_dump($_FILES['imagen']);

    $directorioSubida ="img/";
    $max_file_size = "5120000";
    $extensionesValidas = array("jpg", "png", "gif");

    // Comprobamos si el archivo ha sido subido correctamente
    if(isset($_FILES['imagen'])){
        $errores = 0;
        $nombreArchivo = $_FILES['imagen']['name'];
        $filesieze = $_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo['extension'];


        // Comprobamos si la extension es válida
        if(!in_array($extension, $extensionesValidas)){
            echo "La extension no es válida";
            $errores++;
        }
        // Comprobamos si el tamaño del archivo es válido
        if($filesieze > $max_file_size){
            echo "El tamaño del archivo es mayor a 5MB";
            $errores++;
        }

        // Si los errores son 0, entonces subimos el archivo
        if($errores == 0){
            //echo $nombreArchivo;
            $nombreCompleto = $directorioSubida.$nombreArchivo;
            // muevemos el archivo a la carpeta de destino
            move_uploaded_file($directorioTemp, $nombreCompleto);
        }

    }

    // Ejecutamos la insercion en la base de datos
    $insertar ="INSERT INTO productos (id, nombre, descripcion, precio, fotografia) VALUES ($identificador, '$nombre', '$descripcion', $precio, '$nombreArchivo')";

    mysqli_query($conexion, $insertar) or die("Error de insercion: " . mysqli_error($conexion));
    // Para que cuando se inserte el producto, se redirija a la pagina de alta_ok.php
    header("Location: alta_ok.php");


?>