<?php

require_once '../models/Curso.php';

if (isset($_POST['operacion'])){

  $curso = new Curso();

  if($_POST['operacion'] == 'listar'){

    $datosObtenidos = $curso->listarCursos();
    //En esta ocasion NO enviaremos un objeto JSON, en su lugar el controlador renderizara las filas que necesita <tobdy></tobdy>
    //echo json_encode($datosObtenidos);

    //PASO 1: Verificar que el objeto contenga datos
    if($datosObtenidos){
      $numeroFila = 1;
      // PASO 2: Recorrer todo el objeto
      foreach($datosObtenidos as $curso){
        // PASO 3: Ahora construimos las filas
        echo "
        <tr>
          <td>{$numeroFila}</td>
          <td>{$curso['nombrecurso']}</td>
          <td>{$curso['especialidad']}</td>
          <td>{$curso['complejidad']}</td>
          <td>{$curso['fechainicio']}</td>
          <td>{$curso['precio']}</td>
          <td> 
          <a href='#' class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></a>
                <a href='#' class='btn btn-info btn-sm'><i class='bi bi-pencil-fill'></i></a>
          </td>
        </tr>
        ";
        $numeroFila++;
      }
    }

  }

}