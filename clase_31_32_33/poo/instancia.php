<?php
 #vamos a crear una instancia de la clase vehiculo , es decir un objeto de esta clase
 #linqueamos los archivos de php
  require 'vehiculo.php';
  require 'profesor.php';
 
 /*
  $auto = new Vehiculo("Fiat","Negro","3458732f8747","uyie933y728239390");

  echo $auto->marca;

  $precioVenta = $auto->valorVenta(3000000,100);
  echo "<br>";
  echo  "<h2>el Vehiculo tiene un precio de venta de: " .$precioVenta."</h2>";

  $auto->setPropietario("Pedro Ramirez");
  
  echo "<h2>Su propietario es : ".$auto->getPropietario().""; 
  echo "<br>";
  */

  #aca estamos creando un objeto a partir de la clase profesor.
  $profesor = new Profesor("Jose","Gonzalez");
  # tiene acceso a propiedades de modificacion de su clase padre,(persona)
  $profesor->setDni(33987654);

  $profesor->setCodProfesor(12);

  $profesor->mostrarDatos();


?>