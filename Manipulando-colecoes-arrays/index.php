<?php

include "autoload.php";
use classes\aluno\Aluno;

$aluno = new Aluno();
$aluno->adicionarNota(9);
$aluno->adicionarNota(10);
$aluno->adicionarNota(6.5);
$aluno->adicionarNota(7.8);

$media = $aluno->calcularMedia();

echo $media != null ?  "<p>Media: $media</p>" :  "<p>O aluno não tem notas registradas.</p>";

