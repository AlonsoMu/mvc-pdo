<?php

require_once "Conexion.php";

//MODELO = contiende la logica
//extends : Herencia (PDO) en PHP
class Curso extends Conexion{

  // Objeto que almacene la conexion que viene desde el padre(Conexion) y la compartira con todos los metodos (CRUD+)
  private $accesoBD;

  //Constructor, INICIALIZAR
  public function __CONSTRUCT(){
    $this->accesoBD = parent::getConexion(); // El valor de retorno (getConexion) de esta funcion ha sido asignada a este objeto (accesoBD)
  }

  //Metodo listar cursos
  public function listarCursos(){
    try {
      // 1. Preparamos la consulta
      $consulta = $this->accesoBD->prepare("CALL spu_cursos_listar()");
      // 2. Ejecutamos la consulta
      $consulta->execute();
      // 3. Devolvemos la consulta(array asociativo)
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (Exception $e){
      die($e->getMessage());
    }
  }

  public function registrarCurso(){
    try {
      
    }
    catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function eliminarCurso(){
    try {
      
    }
    catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function actualizarCurso(){
    try {
      
    }
    catch (Exception $e) {
      die($e->getMessage());
    }  
  }

}

?>