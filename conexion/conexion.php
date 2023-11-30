<?php


echo "probando la conexion";

$conexion =mysqli_connect("localhost","root","","cursosphp2023");

if(mysqli_connect_errno()){
    echo "error de conexion";
}else{
    echo "se conesto";
}

$consultas = mysqli_query($conexion,"select * from cursos4 ");


var_dump($consultas);

$listado = mysqli_fetch_assoc($consultas);

var_dump($listado);

echo $listado['nombre'];