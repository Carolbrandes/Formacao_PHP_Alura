<?php
Declare(strict_types = 1);
require_once "autoload.php";
use classes\banco\Agencia;
use classes\contas\ContaCorrente;
use classes\clientes\Titular;

// criar agencia
// criar conta
// criar cliente

$agencia = new Agencia("2222");
$conta = new ContaCorrente($agencia, "11111-1");
$titular = new Titular("Ana Paula", "111.111.111-11", $conta);

$lista = $agencia->listaClientes;
echo "<pre>";
var_dump($lista);
echo "</pre>";




