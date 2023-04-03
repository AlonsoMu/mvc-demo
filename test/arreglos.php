<?php

//ARRAY(arreglo)/coleccion mas sencillo. Posee un indice, el primero es 0 (UNIDIMENSIONAL)
$platos = ["Ceviche", "Arroz con pollo", "Carapulcra", "Aji de gallina", "Lomo saltado"]
echo $platos[0];  // Primero
echo $platos[1];

$amigos = array("Jose","Diego","Juan","Fer");
echo $amigos[1]; // Segundo

//Array MULTI dimensional (matriz)
$aplicaciones = [
  ["Photoshop","Corel Draw","Premier","Muse"],
  ["VSCode", "Xampp","NetBeans","Erwin","Notepad++"],
  ["Excel","Sap","Autocad","PoweBi","Project"]
];

//Obtener VSCODE
echo $aplicaciones[1][0]; //1 = indice arreglo, 0 = indice del valor

//Obtener Muse
echo $aplicaciones[0][3];
//Obtener SAP
echo $aplicaciones[2][1];


// Hasta aqui, cualquie de los arreglos anteriores, utiliza un indice (int)
// ARREGLOS ASOCIATIVOS... KEY = VALUE
$datosPersonales = [
  "apellidos"     => "Munoz Quispe",
  "nombres"       => "Alonso Enrique",
  "especialidad"  => "Ingenieria de Sotfware con IA",
  "email"         => "alonsomunoz260@gmail.com",
  "edad"          => 19,
  "estacasado"    => true,
  "peliculas"      => ["Mario Bross", "EndGame", "Spiderman"]
];

//Obtener la especialidad
echo $datosPersonales["especialidad"];

//Obtener la primera de tus peliculas favoritas
echo $datosPersonales["peliculas"][0]

