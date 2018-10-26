<?php
//Arrays
//Para exibir um array print_r(nomeDoArray)

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
//Indicando que o Camaro vai está no [índice 10]
$carros[10] = "Camaro";
echo $carros[10];

echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];

echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);

echo "<br>";

echo $clientes[2];

