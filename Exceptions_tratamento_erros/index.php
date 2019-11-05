<?php

require_once "autoload.php";

use classes\banco\Agencia;
use classes\banco\Banco;
use classes\clientes\Titular;
use classes\contas\Cc;

$banco = new Banco("Banco");
$agencia = new Agencia("2222");
$cliente = new Titular("José", $banco, $agencia, "2222-22", "cc");

echo "<h2>Lista clientes Agencia:</h2>";
echo "<pre>";
var_dump($agencia->listaCliente);
echo "</pre>";

echo "<br><br>";

echo "<h2>Lista contas cliente:</h2>";
echo "<pre>";
var_dump($cliente->listaContas);
echo "</pre>";

















