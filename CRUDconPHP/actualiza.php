<?php 
// Como tenemos que acceder a la BD para consultar datos tenemos que incluir la conexion
include "conexion.php";
include "header.php";

?>

<div class="container my-5 ">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Actualización de producto
                </div>

            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Productos:
                        </div>
                        <?php
                        mysqli_select_db($conexion, "productosbd");
                        $consultar = "SELECT * FROM productos";
                        //Ejecutamos esa consulta e ir recogiendo cada fila de esa tabla
                        $registros = mysqli_query($conexion, $consultar);
                              // ahora generamos nuestra tabla usanmos bs5-table-default para empezar                  
                        ?>
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-hover"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">Identificador</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    while($registro=mysqli_fetch_row($registros)){

                                    
                                    ?>
                                    <tr class="align-middle">
                                        <td scope="row"><?php echo $registro[0]; ?></td>
                                        <td scope="row"><?php echo $registro[1]; ?></td>
                                        <td scope="row"><?php echo $registro[2]; ?></td>
                                        <td scope="row"><?php echo $registro[3]; ?></td>
                                        <td> <?php echo'<img width="100px" height="100px" src="img/'.$registro[4].'">'; ?></td>
                                        <td> <a href="actualiza2.php?id=<?php echo $registro[0]; ?>"> <i class="bi-pencil px-1" style="font-sieze: 2rem; color:green;"></i></a></td>
                                    </tr>
                                    <?php 
                                        // cerramos nuestro bucle while
                                        } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>

                </div>
                <a href="index.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black;"></i></a>    
            </div>
        </div>
    </div>
</div>"


<?php 

include "footer.php";

?>


