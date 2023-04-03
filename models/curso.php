<?php

class Curso{


  //ATRIBUTO (contenedor de datos)
  //Data sera un arreglao asociativo multidimensional
  private $data = [
    [
      "id"    => 1,
      "nombre"=> "AutoCAD",
      "nivel" => "Basico",
      "precio"=> 300,
      "horas" => 30
    ],

    [
      "id"    => 2,
      "nombre"=> "Excel",
      "nivel" => "Intermedio",
      "precio"=> 280,
      "horas" => 25
    ],

    [
      "id"    => 3,
      "nombre"=> "Java",
      "nivel" => "Avanzado",
      "precio"=> 290,
      "horas" => 30
    ],

    [
      "id"    => 4,
      "nombre"=> "Python",
      "nivel" => "Intermedio",
      "precio"=> 240,
      "horas" => 25
    ],

    [
      "id"    => 5,
      "nombre"=> "Javascript",
      "nivel" => "Avanzado",
      "precio"=> 350,
      "horas" => 40
    ]
  ];

  //Metodos 
  public function listarCursos(){
    return $this->data;
  }

}