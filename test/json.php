<?php

//Almacena en la memoria del SERVER
$computadora = [
  "CPU"       => "Intel Core i7",
  "RAM"       => 32,
  "STORAGE"   => ["SSD", "HDD"],
  "SO"        => "Windows",
  "VERSION"   => 10,
  "APPS"      => ["Office","VSCode", "NetBeans", "Xampp"]
];

//echo $computadora["CPU"];
echo json_encode($computadora);