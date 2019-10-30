<?php
declare(strict_types=1);

include "autoload.php";
use classes\aluno\Aluno;

$aluno = new Aluno();
$aluno->adicionarNota(9);
$aluno->adicionarNota(10);
$aluno->adicionarNota(6.5);
$aluno->adicionarNota(7.8);
$aluno->apagarNota(6.5);
$aluno->exibirNotas();
$aluno->exibirMedia();






