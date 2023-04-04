<?php

require_once "./Conexion.php";

//MODELO = contiende la logica
//extends : Herencia (PDO) en PHP
class Curso extends Conexion{

  // Objeto que almacene la conexion que viene desde el padre(Conexion)
  private $accesoBD;

  //Constructor
  public function __CONSTRUCT(){

  }

  //Metodo listar cursos
  public function listarCursos(){

  }

  
}

?>