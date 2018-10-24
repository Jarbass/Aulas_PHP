<?php
//Escalares
//string

$nome = "Jarbas";
var_dump($nome); //Mostra informações sobre a variável.

echo"<br>";

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo"<hr>";

//int
$idade = 27;
var_dump($idade);

echo "<br>";

if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;

echo"<hr>";

//float
$altura = 1.77;
var_dump($altura);

echo "<br>";

if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;

echo"<hr>";

//boolean
$admin = true;
var_dump($admin);

echo "<br>";

if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;

echo"<hr>";

//Compostos
//Array
$carros = array ("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);

echo "<br>";
echo"<hr>";

//Object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this -> $nome = $nome;
    }
}

$cliente = new Cliente();
$cliente-> atribuirNome("Jarbas");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;

echo "<hr>";
echo "<br>";