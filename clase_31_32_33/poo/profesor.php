<?php

require "persona.php";

# profesor hereda atributos y metodos de Persona
class Profesor extends Persona{
    #atributos
    private $cod_profesor;
    public $materia;

    #propiedades de modificacion de visibilidad(es un metodo)
    public function setCodProfesor($codigo){
        $this->cod_profesor =$codigo;
    }

    public function getCodProfesor(){
        return $this->cod_profesor;
    }

    public function mostrarDatos(){
        # aca llamo a la funcion mostrarDatos de la clase Padre
        parent::mostrarDatos();
        echo "<h2> El codigo del Profesor es: ".$this->getCodProfesor()."</h2>";
    }
}


class JefedeCatedra extends Profesor{



}


/*

# este ejemplo demuestra que no se puede heredar de esta clase por la palabra reservada final
final class Coche {
    public function getColor()
    {
        echo "Rojo";
    }
}
class CocheDeLujo extends Coche {
    // Error fatal, clase no heredable
}



*/

?>