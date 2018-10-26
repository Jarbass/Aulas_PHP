<?php
//Constantes
define("Nome", "José Carlos");
define("Idade", 24);
define("Altura", 1.89);
define("Casado", TRUE);

var_dump(Nome);

echo "<hr>";

//Conjunto de caracteres concatenando com constantes
echo 'Meu nome é '.Nome. ' e minha idade é ' .Idade.'.';

echo "<hr>";

//Constantes + Arrays
define("Times", ["Vasco", "Flamengo", "Fluminense"]);

echo Times[0];

echo "<br>";

var_dump(Times);

echo "<hr>";

//Constantes são de escopos globais
function exibeNome() {
    echo Nome;
}

exibeNome();