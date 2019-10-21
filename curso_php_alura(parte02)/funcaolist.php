<?php

$idadeList = [21, 23, 19, 25, 30, 41, 10];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

foreach ($idadeList as $idade) {
   echo $idade . PHP_EOL;
}

// no caso de array associativo, temos que informar o nome dos indices e "linkar" com nome da variavel:

    require_once 'funcoes.php';

$contas = [
    '111.111.111-11' => [
        'titular' => "Maria",
        'saldo' => 4000
    ],

    '222.222.222-22' => [
        'titular' => "João",
        'saldo' => 2000
    ],

    '3333.3333.333-33' => [
        'titular' => "Sandra",
        'saldo' => 1000
    ]

];
foreach ($contas as $cpf => $conta) {
    // list('titular' => $titular, 'saldo' => $saldo) = $conta;

    // forma mais enxuta:
        ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "$titular ($cpf) - R$ $saldo" . PHP_EOL;
}

