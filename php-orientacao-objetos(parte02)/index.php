<?php

require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\funcionarios\Gerente;



$diretor = new Diretor("João", "111.111.111-11", 30000.00);
var_dump($diretor);
echo "<br><br>";

$designer = new Designer("Paulo", "222.222.222-22", 5000.55);
var_dump($designer);
echo "<br><br>";

$gerente = new Gerente("Maria", "333.333.333-33", 9000);
var_dump($gerente);
echo "<br><br>";

$diretor->senha = "123";
var_dump($diretor->autenticar("125"));





