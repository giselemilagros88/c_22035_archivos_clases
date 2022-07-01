<?php

#PHP es un lenguaje que te permite programar orientado a objetos, un paradigma que se basa en la declaración de clases que trabajan como moldes para todos tus objetos, en el que programarás métodos y declararás atributos.

# info sobre programacion orientada a objetos en php 
# https://diego.com.es/programacion-orientada-a-objetos-en-php


#es una plantilla, a partir de esta vamos a poder crear varias personas
class Persona{
    #atributos
    public $nombre;
    public $apellido;# se puede acceder desde todos lados
    private $dni; # solo puede verlo la clase propia
    protected $telefono; # se hereda en las clases hijas ,Desde la misma clase que declara , Desde las clases que heredan esta clase
    
   

    #metodo constructor 
    public function __construct($n,$a){
        #this hace referencia al objeto actual, es decir a esos objetos futuros que seran creados a partir de esta plantilla
        $this->nombre = $n;
        $this->apellido =$a;
    }

    #acciones o metodos para insertar desde afuera de la clase
    public function setDni($dni){
        $this->dni = $dni;

    }

    public function getDni(){
        return $this->dni;
    }

    public function mostrarDatos(){
       echo "<h2>El nombre es ".$this->nombre.", el apellido es ".$this->apellido.", y su D.N.I.: ".$this->getDni()."</h2>";
    }
}






?> 
