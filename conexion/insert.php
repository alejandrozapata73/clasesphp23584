<?php


require 'conexion.php';

echo "Prueba insertar ";

// $sql_insert = 



if(false){

$nombreForm = "hola30";
$correoForm = "Mariana@gmail.com";
$idForm = "1";

$insertar = mysqli_query($conexion,"INSERT INTO alumnos4 (id_alumno,nombre, correo, curso_id) VALUES (NULL,'$nombreForm','$correoForm','$idForm')");


if(!$insertar){
    echo "no se inserto en la BASE de DATOS";
}else{
    echo "se conecto de forma correcta";
}


}else {
    echo "no se puede insertar por vacio";
    header('location: error.php');
}