<?php

//hola esto es un comentario sola linea
echo "<h1>hola mundo PHP</h1>";

echo "<br>";

echo "5" + true;

echo "<br>";

echo "hola proband mi <b>nombre:</b> ";

echo 5.2;

$nombre = "Alejandro";
$numeroA = 15;
$numeroB = 15;

echo "<br>";

echo "Probando variables <br>";

echo $nombre;

echo $numeroA + $numeroB;

$sumaValores = $numeroA + $numeroB;

$apellido = "Tedesco";

echo "Esto es el valor Suma: " . $sumaValores;

echo "<br> <h2>Esto es valor Suma</h2> {$sumaValores} ";



//operador ternario

$promedio = 4;

$resultadoTernario = ($promedio > 6)?"Es Mayor Ternario":"Es menor Ternario";


if($promedio>6){

    echo "Es mayor Tradicional";

}else{

    echo "Es menor Tradicional";
}

echo $resultadoTernario;

echo "<h2> Array en php </h2>";

$arrayPHP = ["mariano","pedro","juan","marta","alicia"];

echo $arrayPHP[0];

foreach($arrayPHP as $unidad){

    echo "Mi nombres es:" . $unidad . "<br>";
}

foreach($arrayPHP as $i=>$unidad){

    echo "Mi nombres es:" . $unidad . "y su indice es". $i."<br>";
}

//array asociativos
echo "<h2> Array Asoc. </h2>";

$personaje1 = [
//   key         valor
    "nombre"=>"mariano",
    "apellido"=> "perez",
    "edad"=>35,
    "aprobado"=>true
];

$personaje2 = [
    //   key         valor
        "nombre"=>"jorge",
        "apellido"=> "Moares",
        "edad"=>28,
        "aprobado"=>false
    ];

    $personaje3 = [
        //   key         valor
            "nombre"=>"Daniela",
            "apellido"=> "Martinez",
            "edad"=>18,
            "aprobado"=>true
        ];

foreach( $personaje3 as $key=>$valor){

    echo "<br> $key: $valor";

}

//puedo recorrer un asociativo con un For?
// for($i=0;$i<3;$i++){

// }

// var nombre = {
//     nombre: "juan",
//     apellido: "pereez",
//     edad: 35
// }
// console.log(nombre["nombre"])

echo $personaje1["nombre"];
echo $personaje1["edad"];
echo $personaje1["apellido"];


// for($indice = 0; $indice<10;$indice++){

//     $arrayPHP
//     $arraApellidos
// }


// < > >= <= != === 

// &&  || !

// while(){


// }

// for(){

// }


$nombreUsuario = "Martin";
$edad = 15;
$membresia = "gold";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php y html</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<h1>Hola esto es html + PHP</h1>

<h2>hola mi nombres es: <?php echo $nombreUsuario  ?></h2>
<h2>Edad: <?php echo $edad  ?></h2>

<?php
if($edad>18 && $nombreUsuario==="Martin" && $membresia==="gold"){
?>

<div class="alert alert-primary" role="alert">
  Es mayor!!!!
</div>

<?php
}else{
?>
    <div class="alert alert-success" role="alert">
    Es menor!!!!
    </div>

<?php
}

?>

<div class="container">

<form action="datos.php" method="get">


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="nombre">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="password">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentarios"></textarea>
</div>

<input type="submit" value="Enviar">
<input type="reset" value="Borrar">

</form>

</div>

<!-- <script>

console.log("hola mundo js")

</script> -->
    

<div class="btn-group btn-group-lg" role="group" aria-label="">
    Add buttons here
</div>

<form>
<div class = "form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-primary">Sign In</button>
</form>



</body>
</html>





