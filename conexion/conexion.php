<?php

//funciones exclusivas para conexion en php (funciones, POO)

/*
1-localhost
2-root (usuario de base datos)
3-"" (contraseña)
4-cursosphp2023 (nombre de base de datos)

*/


$conexion = mysqli_connect("localhost","root","","cursosphp2023");

echo "Probando Conexion a BD php";

if(mysqli_connect_errno()){

    echo "no se conecto por un error: " . mysqli_connect_errno();    
}else{
    echo "se conecto de forma correcta";
}

//configurar libreria, traer objeto, trer .config, localhost, contraseña, locals..


//java.. tener Driver de conexion, version php, version mysl, maven, tomcat..


$consulta = mysqli_query($conexion,"SELECT * FROM cursos4 ");

echo "<pre>";
var_dump($consulta);
echo "</pre>";

// $listado =mysqli_fetch_assoc($consulta);

$listadoArray = mysqli_fetch_array($consulta);

echo "<pre>";
var_dump($listadoArray);
echo "</pre>";

// echo "<br>";
// echo $listado['id_curso'];
// echo $listado['nombre'];
// echo $listado['costo'];

// foreach($listado as $valor){
//     echo $valor;
// }

//2-traer de la base de datos en un listado:

https://getbootstrap.com/docs/5.0/content/tables/

//while

?>


