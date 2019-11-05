<?php

require_once "autoload.php";

use classes\banco\Agencia;
use classes\banco\Banco;
use classes\clientes\Titular;
use classes\contas\Cc;

$banco = new Banco("Banco");
$agencia = new Agencia("2222", $banco);


$listaAgencias = $banco->listaAgencias;
echo "<h2>Lista de Agencias do banco:</h2>";
echo "<ul>";
foreach ($listaAgencias as $agencia) {
        echo "<li>". $agencia->codigo."</li>";
}
echo "</ul>";

$titular = new Titular("Maria", $agencia, "1234-5", "cc");
$listaTitulares = $agencia->listaCliente;

echo "<h2>Lista de titulares da agencia:</h2>";
echo "<ul>";
foreach ($listaTitulares as $titular) {
        echo "<li>". $titular->nome."</li>";
}
echo "</ul>";
























