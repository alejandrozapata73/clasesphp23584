<?php

echo "hola soy una funcion";

function saludar(){

    echo "hola esto es una funcion sin parametros";

}

function saludarParametros($nombre,$apellido,$edad,$humano=true){

    if($edad>=18 && $humano==true){
    echo "El usuario es: ". $nombre . "y su apellido es: " . 
$apellido;

    }else{
        echo "No es mayor de edad";
    }

}

saludar();

saludarParametros("Ariel","Campos",19,false);

//funciones con retorno
function conRetorno(){

    return true;

}

echo "<br>";
echo conRetorno();

echo "<br>";

$resultadoRetorno = conRetorno();

if($resultadoRetorno){
    echo "dio que es verdadero";
}

echo "<br>";

if(isset($resultadoRetorno)){
    echo "existe la variable: " . isset($resultadoRetorno);
}


echo "<br> ";

// $leandro="admin";

// if(isset($leandro) && $leandro=="admin" && //funciones que busque una letra ){
//     echo "existe la variable Leandro: " . isset($leandro);
// }else{
//     echo "no existe Leandro como Variable tal: " . isset($leandro);
// }



// valor de entrada (variable,array,objeto) -> "Encapsulado" -> devolver/retornar


//Programacion orientada a Objetos...

//variables...array...arrayAsociativos...Objetos

// $persona1 = [
//     "nombre"=>"marcos",
//     "apellido"=>"gomez",
//     "edad"=>48
// ]

// $jose = [
//     "nombre"=>"marcos",
//     "apellido"=>"gomez",
//     "edad"=>48
// ]

class Persona {

    public $nombre;
    public $apellido;
    public $edad=18;
    public $telefono;
    public $soyRobot;

    function presentacion(){

        echo "Hola soy: y mi edad es: " ;
    }

    function hablar(){

        echo "estoy hablando bla bla bla bla";
    }

    function dormir($hora,$tarea){

        if($hora==1530 && $tarea==true){
           return true;
        }else{
            return false;
        }

    }

    function cantar(){

        echo "Estoy cantando rap rap rap tap";

    }


}

//un objeto de la clase Persona
$jose = new Persona();
$jose->nombre = "Jose";
$jose->apellido = "Velez";

echo $jose->nombre;
echo $jose->apellido;
echo $jose->edad;
$jose->hablar();
$jose->cantar();
echo $jose->dormir(1530,false);

echo "<h2>Otro objeto</h2>";

$gerardo = new Persona();

$gerardo->nombre = "gerardo";
$gerardo->apellido = "Montalvo";
$gerardo->edad = 52;

echo $gerardo->nombre;
echo $gerardo->apellido;
echo $gerardo->edad;

// class Oradores {

//     $id_oradores;
//     $nombre;
//     $apellido;
//     $correo;
//     $tema;
//     $fecha_orador

// }


//Tarea Fin de semana
/* clear una clase SuperHeroes, o algun tema partilar

generar 5 objetos

*/

?>