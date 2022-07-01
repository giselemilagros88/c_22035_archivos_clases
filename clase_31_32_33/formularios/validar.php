<?php

/*
 if ($_POST){

    $nombre = $_POST["email"]; 

    $pass= $_POST["pass"]; 

    echo "Hola ".$nombre;

    echo "<br>";
    
    $contrasenia_guardada="123456";

    if ($pass != $contrasenia_guardada) {
        echo "Su contraseña no es correcta";

    }

 }*/


 if ($_GET){

    $mail = $_GET["email"]; 

    $pass= $_GET["pass"]; 

    echo "Hola ".$mail;

    echo "<br>";
    
    $contrasenia_guardada="123456";

    if ($pass != $contrasenia_guardada) {
        echo "Su contraseña no es correcta";

    }

    $variable = " L 45 ";
    $variable = (int) $variable; 
   # $variable = (int) trim($variable);
   
    echo $variable;

    echo "<br>";

     #array clasico 
     $numeros = [10,20,30,40,50,60];

     
     var_dump($numeros);
     echo "<br>";

     $array = array("a"=>"manzana" , "b" =>"banana");
     foreach($array as $fruta){

        echo $fruta;
        echo "<br>";
        echo "<hr>";

    }

 }
?>