<?php
session_start();

echo "Sesion";

$usuarioSimple = "miguel";

$_SESSION['username'] = "Mariana";
$_SESSION['correo'] = "mariana@gmail.com";
$_SESSION['nivel'] = "3 estrellas";


echo "<br>";

echo "varialbe simple: " . $usuarioSimple;

echo "<br>";

echo "Session: " . $_SESSION['username'];
