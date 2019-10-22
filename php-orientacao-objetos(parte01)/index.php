<?php

require "ContaCorrente.php";

$conta1 = new ContaCorrente("Maria", "1212", "343423-9", 6000.80);
// $conta1->sacar(40);
// // var_dump($conta1);
// $conta1->depositar(50);
// var_dump($conta1);

echo $conta1->titular;
echo $conta1->saldo;