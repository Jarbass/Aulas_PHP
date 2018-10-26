<?php

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);

echo "<br>";
echo "<br>";

//echo $clientes[2];
//Para exibir a quantidade de elementos que tem no array

//echo count($clientes);

//Podemos atribuir o count a uma variável
$totalClientes = count($clientes);

echo $totalClientes;

echo "<hr>";

//Para percorrer um array
foreach($clientes as $valor) {
    echo $valor. "<br>";
}