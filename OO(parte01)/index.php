<?php
require "Validacao.php";
require "ContaCorrente.php";

$conta1 = new ContaCorrente("Maria", "1212", "343423-9", 6000.80);
$conta2 = new ContaCorrente("João", "1212", "345567-7", 5000.00);

var_dump($conta1);
var_dump($conta2);

$conta1->transferir(20, $conta2);

var_dump($conta1);
var_dump($conta2);


// "chamando" o metodo __toString
echo $conta2;

// para chamar o metodo estatico da classe validacao, ele vai lancar um erro.
Validacao::protegeAtributo("saldo");

// $conta1->sacar(40);
// // var_dump($conta1);
// $conta1->depositar(50);
// var_dump($conta1);
// echo $conta1->titular;
// echo $conta1->saldo;