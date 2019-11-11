<?php

use classes\banco\Agencia;
use classes\banco\Banco;
use classes\clientes\Titular;
use classes\contas\ContaCorrente;

require_once "autoload.php";

$banco = new Banco();
$agencia = new Agencia($banco, "2222");
$agencia2 = new Agencia($banco, "2225");

$conta1 = new ContaCorrente($banco, $agencia, "1111-11", "Cc");

$conta2 = new ContaCorrente($banco, $agencia, "1111-22", "Cc");

$titular = new Titular("Maria", "111.111.111-11", $conta1);

$titular2 = new Titular("Jussara", "111.222.111-15", $conta2);


$conta1->depositar(2000);
echo "Antes do saque: " . $conta1->saldo . "<br>";

$conta1->sacar(100);

echo  "Após o saque: " . $conta1->saldo . "<br>";

$banco->exibeAgencias();
$agencia->exibeClientes();
$titular->exibeContas();
$titular2->exibeContas();



