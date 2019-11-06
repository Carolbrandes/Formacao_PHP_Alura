<?php

use classes\banco\Agencia;
use classes\banco\Banco;
use classes\estaticas\Validador;

require_once "autoload.php";

$banco = new Banco();
$agencia = new Agencia($banco, "2222");
$agencia2 = new Agencia($banco, "2222");
$banco->exibeAgencias();



