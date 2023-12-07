<?php

echo "<h2> Eliminiar!!!! </h2>";

require "conexion.php";

//eliminar algun registro de mi tabla de la BD

$queryEliminar = "DELETE FROM alumnos4 WHERE id_alumno = '5'";

$deleteRegistro = mysqli_query($conexion,$queryEliminar);

if($deleteRegistro){
    echo "eliminadooooo!";
}

