<?php

class Mascota{

  private $nombre;
  private $tipo;
  private $sexo;
  private $peso;

  //Constructor (metod - unica ejecucion)
  //Inicializacion de variables
  public function __CONSTRUCT($nombre, $tipo, $sexo, $peso){
    $this->nombre = $nombre;
    $this->tipo = $tipo;
    $this->sexo = $sexo;
    $this->peso = $peso;
  }

  public function __GET($atributo){
    return $this->$atributo;
  }

}

$mascota1 = new Mascota("Firulais", "Perro", "Macho", 40);

echo $mascota1->__Get("nombre");
echo $mascota1->__Get("tipo");
echo $mascota1->__Get("sexo");
echo $mascota1->__Get("peso");