
<?php
#clases en php-- paradigma orientado a objetos

#los objetos parten de las clases que son una plantilla a partir de la cual 
#se van a crear los objetos luego
#esas clases tienen atributos, metodos que son como las funciones que conocemos
#que son las acciones que hacen los objetos o que pueden tener los objetos que creamos

class Vehiculo{
    #tipo de privacidad de los atributos
    #aquellos atributos que no sean sencibles se declaran como publicos
    # y se puede acceder desde afuera de la clase
    public $marca;
    public $color;
    public $placa;
    #privados son solo de la clase
    private $chasis;
    private $motor;
    private $propietario;

    #los metodos pueden ser privados o publicos y tienen la misma logica de privacidad

    #metodo constructor de la clase 
    #que se ejecuta de manera automatica cuando creo un objeto de la clase 
    #le puedo asignar a los atributos valores iniciales
    public function __construct($mr,$cl,$cha,$mtr){
        #cuando un vehiculo se construye no tiene ni propietario , 
        #ni placa aun, asi que no los vamos a asignar ahora
        $this->marca = $mr;
        $this->color =$cl;
        $this->chasis = $cha;
        $this->motor = $mtr;

    }
    #metodo que calcula el valor de la venta segun la produccion y el porcentaje de ganancia

    public function valorVenta($costo,$porcentaje){
        $ganancia = ($costo * $porcentaje) / 100;
        $vta = $costo + $ganancia;
        return $vta;
      


    }

    #para poder acceder a los atributos privados vamos a usar el metodo get y set 

    #el set asigna un dato
    #el get obtiene el valor 

    public function setPropietario($pr){
        $this->propietario = $pr;
    }

  public function getPropietario(){
      return $this->propietario ;
  }


}  
?>