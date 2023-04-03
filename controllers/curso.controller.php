<?php

//Incorporar al modelo
require_once "../models/curso.php";

//Verificar si existe una operacion en curso
// GET - POST - REQUEST

if (isset($_POST['operacion'])){

  //Instancia de la clase curso
  $curso = new Curso();


  //Identificar la operacion: listar,insertar, eliminar, buscar, etc.
  if($_POST['operacion'] == 'listar'){

    //Utilizaremos el metodo definido en la clase
    $resultado = $curso->listarCursos();

    //Enviamos el resultado a la vista como un JSON
    echo json_encode($resultado);

  }

  if ($_POST['operacion'] == 'buscarID'){

  }


}