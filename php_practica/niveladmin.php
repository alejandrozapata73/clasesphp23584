<?php

$superUsuario = "geraro";
$superPass = "123456";

require 'pages/header.php';


if($superUsuario=="gerardo"){

    require 'pages/main.php';

}else{

   

    require 'error/404.php';

    echo "el virus se llama: " . $error404;

    

}



require 'pages/footer.php';

?>