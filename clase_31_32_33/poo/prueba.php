<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTO ES HTML EN PHP</title>
</head>
<body>
    <h1>Esto es HTML EN PHP, lo cambio</h1>

    hola esto no tiene etiqueta

</body>
</html>

<?php
  

  echo "Hola Mundo";

  echo "<h2> Esto es un Subtitulo de HTML </h2>";

  echo "<!--Esto es un comentario de html-->";

  #esto es un comentario 
  // esto es otro comentario 
  /* esto es un comentario de varias lineas */

  $nombre = "Pepe";

  $numero = 33; 

  $real = 33.40;


  echo "<h3>".$nombre."</h3>";

  print("<p>Hola este es un msj en pantalla</p>");

  echo PHP_OS;
  echo "<br>";
  echo "<hr>";
  echo PHP_VERSION;
  echo "<hr>";
  echo __LINE__;
  echo "<br>";
  #cual es la ruta de archivo que estamos trabajando 
  echo __FILE__;
  echo "<br>";

  $nombres = array();

  $numeros = [1,2,3,4,5,6];

  var_dump(  $numeros);

?>