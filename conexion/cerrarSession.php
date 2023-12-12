<?php
session_start();

session_destroy();

header("location: conexion.php");


echo "<br>";

echo "Session: " . $_SESSION['username'];