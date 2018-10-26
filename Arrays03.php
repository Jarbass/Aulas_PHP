<?php
//Arrays associativos 
//Quando os índices são strings

$pessoa = ["nome" => "Rodrigo", "Idade" => 23];
$pessoa["cidade"] = "Fortaleza";

foreach($pessoa as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}

//Arrays Multidimensionais
$times = array(
    "Cariocas" => array("Vasco", "Flamengo", "Fluminense"),
    "Paulistas" => array("Santos", "São Paulo", "Palmeiras"),
    "Baianos" => array("Bahia", "Vitória", "Itabuna")
    );

print_r($times["Cariocas"]); "<br>";