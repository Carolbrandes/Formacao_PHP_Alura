<?php
declare(strict_types=1);

include "autoload.php";
use classes\aluno\Aluno;
use classes\curso\Curso;

$aluno = new Aluno("Marcos");
$aluno->adicionarNota(9);
$aluno->adicionarNota(10);
$aluno->adicionarNota(6.5);
$aluno->adicionarNota(7.8);
$aluno->apagarNota(6.5);
// $aluno->exibirNotas();
// $aluno->exibirMedia();

$aluno2 = new Aluno("Maria");
$aluno3 = new Aluno("Gustavo");

$curso01 = new Curso("Lógica");
$curso01->adicionarAluno($aluno);
$curso01->adicionarAluno($aluno2);
$curso01->adicionarAluno($aluno3);
$curso01->exibirAlunos();

$curso01->removerAluno($aluno3);
$curso01->exibirAlunos();








