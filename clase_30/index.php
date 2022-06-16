<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML EN PHP</title>
</head>
<body>
    <h1>Esto es Html dentro de PHP </h1>
</body>
</html>


<?php
# los proyectos de php se pueden desplegar en casi todos los servidores
# php es uno de los lenguajes mas populares en el mundo
# php es un lenguaje de programacion que se usa para crear paginas web
#php  interpreta codigo de html
# se puede usar en todos los sistemas operativos y plataformas
# es de una curva de aprendizaje rapida y facil 
#sintaxis limpia 2
#comunidad muy amplia

    echo "<h1>empieza php</h1>";
    echo "este es el contenido de mi $"."variable<br>";
    if(print("Hola este es un msj en pantalla") ==1){
        echo "Hola";
    } else {
        echo "Adios";
    }

    echo "Esto abarca
          multiple líneas. Los saltos de línea también
          se mostrarán<br>";

    echo "Esto abarca<br>múltiples líneas. Los saltos de línea también<br>se mostrarán.";

    #esto es un comentario en PHP

    //este tambien es un comentario en php
    /* este tambien es un comentario 
    de muchas lineas */

    echo "<!--comentario de hmtl-->";

    #variables 

    $texto = "Clase 26 de php";
    $miVariable = "perro";
    $numero = 3;
    $miFloat = 5.5;
    $miBool = true;

    #aca estoy concatenando con . 
    echo "<h2>" .$texto. "</h2>";

    #conbinar variables 

    $nombre = "Gisele";
    $dni = 37873888;

    # aquel texto entre comillas simples se interpreta como una cadena de caracteres
    $texto2 = 'Mi nombre es $nombre,Mi dni es: $dni';
    #comilla doble, lee caracter por caracter, por eso reconoce la variable como variable 
    $texto2 = "Mi nombre es:" .$nombre. ",mi dni es: " .$dni;

    echo "<p>$texto2</p>" ;

    echo "---------------------------------------------------";

    #asigno nuevamente un valor

    $texto2 ="Nuevo valor de la variable texto2";

    echo "<p>" .$texto2. "</p>";

    #concateno mas info a una variable 

    $texto2 .=" agrendando mas contenido a la variable texto2";

    $texto2 = $texto2 . "Más Texto ";

    echo "<p>" .$texto2. "</p>";

    $texto2 = 34;

    echo "valor: ".$texto2;

    #puedo armar una lista con echo

    #echo "<br>";
    echo "<h2>Esta es una lista de HTML en PHP</h2>";
    echo "<ul>";
    echo "<li>1ro lista</li>";
    echo "<li>2do lista</li>";
    echo "<li>3ro lista</li>";
    echo "</ul>";

   
          
   
    #con php vamos a realizar el crud

    echo "<h2>¿ Que es un CRUD ?</h2>";

    echo "<p>Dar de alta</p>";
    echo "<p>Modificar</p>";
    echo "<p>Eliminar</p>";
    echo "<p>Consultar</p>";
    echo "<p>Es el clasico ABM</p>";

    #PHP es debilmente tipado ya que no ponemos el tipo de la variable 

    #variables numeros 
    $numero = 10 ; 
    echo "<h1>$numero</h1>"; 

    #constantes en php 

    define('apellido','Gonzalez');
    
    define('nombre','Gisele'); #el nombre de la constante, y el contenido

    #mostrar una constante en php 

    echo nombre; #va sin el signo pesos 
    echo apellido;

   # apellido = "Perez"; #no se puede modificar una constante

    #Sistema operativo 
    echo PHP_OS;
    echo "<br>";
    #version de php
    echo PHP_VERSION;
    echo "<br>";
    #en que linea estoy parado 
    echo __LINE__;
    echo "<br>";
    #cual es la ruta de archivo que estamos trabajando 
    echo __FILE__;
    echo "<br>";

    # clasicas operaciones 
    $numeroA = 10;
    $numeroB = 20 ; 
    echo "<h2>"."SUMA ".($numeroA + $numeroB)."</h2>";

    echo "<h2>"."MULTIPLICACIÓN ".($numeroA * $numeroB)."</h2>";

    echo "<h2>"."DIVISIÓN ".($numeroB / $numeroA)."</h2>";

    echo "<h2>"."MODULO ".($numeroB % $numeroA)."</h2>";

    echo "<h2>"."Potencia ".($numeroB ** 2)."</h2>";

    #asignación de una variable a otra

    $a = ($b = 4) + 5; 

    echo "<h2>"."Asignación: ".($a)."</h2>";
    #incremento en 5
    $a +=5;
    echo "<h2>"."Asignación N°2: ".($a)."</h2>";
    #incremento en 1 en 1
    $a++;
    echo "<h2>"."Asignación N°3: ".($a)."</h2>";
    #decremento en 1 en 1
    $a--;
    echo "<h2>"."Asignación N°4: ".($a)."</h2>";

    #condicionales 

    if ( $a == 14){
        echo "<h3>Entra en el condicional</h3>";
    }
    else{
        echo "<h3> Entra en el else</h3>";
    } 

    #operadores logicos 
    if ( $a == 14 and $b==13){
        echo "<h3>Entra en el condicional</h3>";
    }
    else{
        echo "<h3> Entra en el else</h3>";
    } 

    if ( $a == 14 && $b==13){
        echo "<h3>Entra en el condicional</h3>";
    }
    else{
        echo "<h3> Entra en el else</h3>";
    } 

    if ( $a == 14 || $b==13){
        echo "<h3>Entra en el condicional</h3>";
    }
    else{
        echo "<h3> Entra en el else</h3>";
    } 
   

    if ( $a == 14 or $b==13){
        echo "<h3>Entra en el condicional</h3>";
    }
    else{
        echo "<h3> Entra en el else</h3>";
    } 

    #SWITCH

    $i = 1;

    if ($i == 0) {
        echo "i es igual a 0";
    } elseif ($i == 1) {
        echo "i es igual a 1";
    } elseif ($i == 2) {
        echo "i es igual a 2";
    }
    
    switch ($i) {
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
    }
    
    $cosa = "Mesa";
    switch ($cosa) {
        case "manzana":
            echo "Cosa es una manzana";
            break;
        case "Mesa":
            echo "Cosa es una barra";
            break;
        case "pastel":
            echo "Cosa es un pastel";
            break;
    }

    # se pueden tambien poner los casos que van juntos para distinta condicion y el mismo codigo 

    /*  
    case 0:
    case 1:
    case 2: 
          echo "Cosa es una manzana";
          break;
        
     y se puede agregar default para aquellos casos que no cumplen las condiciones anteriores
     
    default:
    echo "i no es igual a 0, 1 ni 2";
       
       */

    #sintaxis alternativa  1
    $i = 3;
    switch ($i):
        case 0:
            echo "i es igual a 0";
            break;
        case 1:
            echo "i es igual a 1";
            break;
        case 2:
            echo "i es igual a 2";
            break;
        default:
            echo "i no es igual a 0, 1 ni 2";
    endswitch;

    #sintaxis alternativa 2

    $beer = 'heineken';
    switch($beer)
    {
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
        echo 'Buena elección';
    break;
    default;
        echo 'Por favor haga una nueva selección...';
    break;
    }

    /*
    
    Casting de variables
    Hay otra manera de realizar un forzado, para que una variable se comporte como un tipo
    determinado. Ahora vamos a ver otro mecanismo de forzado que es similar al de otros lenguajes
    como C o Java.
    $variable = "23";
    $variable = (int) $variable;
    Los forzados permitidos son:
    (int), (integer) - fuerza a entero (integer)
    (real), (double), (float) - fuerza a número con decimales (coma flotante)
    (string) - fuerza a cadena (string)
    (array) - fuerza a array (array)
    (object) - fuerza a objeto (object)
    (unser) - fuerza a null
    (binary) - fuerza a "binary string"
    
    
    */

    #arrays con keys asociativos
    $array = array("a"=>"manzana" , "b" =>"banana");
    echo "<br>";
    echo $array["a"];

    #array clasico 
    $numeros = [1,2,3,4,5,6];
 
    echo "<br>";
    echo $numeros[0];
    echo "<br>";
    # para mostrar el array completo recorro con un for 
    echo "<h3> recorremos el array de numeros</h3>";
    for ($i= 0 ; $i < 5; $i++){
        echo $numeros[$i];
        echo "<br>";

    }


    var_dump($numeros);

    #clase 27! Miercoles 17/11/21

    #recorremos un array asociativo
    foreach($array as $fruta){

        echo $fruta;
        echo "<br>";
        echo "<hr>";

    }
    # funciones de array para revisar https://www.php.net/manual/es/ref.array.php

    // saber si una key esta dentro de un array asociativo 
    $search_array = array('first' => null, 'second' => 4);

    $existencia = array_key_exists('first', $search_array); # solo verifica si la key existe 
    echo  $existencia;
   
    echo "<br>";

    #muestra un array de keys del array que le pasamos a la funcion.
    $array = array(0 => 100, "color" => "red");
    print_r(array_keys($array));
    echo "<br>";

    # ordenar un array , acceder a la clave y el valor con un foreach
    $frutas = array("limón", "naranja", "banana", "manzana");
    sort($frutas);
    foreach ($frutas as $clave => $valor) {
        echo "frutas[" . $clave . "] = " . $valor . "\n";
        echo "<br>";
    }

    #agregar items al array atras
    $pila = array("Juan", "Pedro");
    array_push($pila, "Miguel", "Roberto");
    print_r($pila);

    echo "<br>";

    #sacar el ultimo item 
    $stack = array("naranja", "plátano", "manzana", "frambuesa");
    $fruit = array_pop($stack);
    print_r($stack);

    echo "<br>";

    #saca el primer item 
    $stack = array("naranja", "plátano", "manzana", "frambuesa");
    $fruit = array_shift($stack);
    print_r($stack);

    #agrega al principio un item al array 
    echo "<br>";

    $cola = array("naranja", "banana");
    array_unshift($cola, "manzana", "frambuesa");
    print_r($cola);

    echo "<br>";

    #buscar dentro del array en que clave esta un valor 
    $array = array(0 => 'azul', 1 => 'rojo', 2 => 'verde', 3 => 'rojo');

    $clave = array_search('verde', $array); // $clave = 2;
    echo $clave;
    echo "<br>";

    $clave = array_search('rojo', $array);  // $clave = 1;
    echo $clave;
    echo "<br>";
    # Reemplaza los elementos del array original con elementos de array adicionales
    $base = array("naranja", "plátano", "manzana", "frambuesa");
    $reemplazos = array(0 => "piña", 4 => "cereza");
    $reemplazos2 = array(0 => "uva");

    $cesta = array_replace($base, $reemplazos, $reemplazos2);
    print_r($cesta);
    
    #funciones en php 

    function mostrarNombre($nombre){
        echo "<h2>Hola ".$nombre."</h2>";
    }

    mostrarNombre("Carlos");

    /* INCLUDE / REQUIRE 
    
    include inserta en nuestro script un código procedente de otro archivo, 
    si no existe dicho archivo o si contiene algún tipo de error nos mostrará un ‘warning‘ por pantalla 
    y el script seguirá ejecutándose.

    require hace la misma operación que include,
    pero en caso de no existir el archivo o error en el mismo mostrará un ‘fatal error‘ 
    y el script no se sigue ejecutando.

    Diferencia entre PHP include_once y require_once

    Estas 2 funciones hacen que si se incluye más de una vez un archivo en el script,
    este solamente se trata/añade una vez.
    las sintaxis que son muy parecidas a las de require e include:

    include_once("ruta_archivo.php");
    include_once "ruta_archivo.php";
 
    require_once("ruta_archivo.php");
    require_once "ruta_archivo.php";

    Al igual que ocurre con require e include la diferencia es la forma de tratar los errores,
    include_once dejaría continuar el script mostrando un ‘warning‘
    y require_once paralizaría el script mostrando un ‘fatal error‘.
    
    
    */

   

?>