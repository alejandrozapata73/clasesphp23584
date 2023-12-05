<?php

class Persona {

public $nombre;
public $apellido;
public $edad=18;
public $soyRobot;
private $telefono ;


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

//los metodos getter y setters...

public function getTelefono(){
    return $this->telefono;
}

public function setTelefono($telefono){

    $this->telefono = $telefono;

}


}



$valorTelUsuario = $_POST['telefono'];

$miguel = new Persona();

$miguel->nombre = "miguel";


echo $miguel->nombre;

$miguel->setTelefono($valorTelUsuario);

echo $miguel->getTelefono();


//1-tarea del finde... 
/*

Crear un formulario que tome X cantidad de inputs y los asigne a un objeto


*/




?>