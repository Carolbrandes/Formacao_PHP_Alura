<?php


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

$contas['444.444.444-44'] = [
    'titular'=> 'Claudia',
    'saldo'=> 3400
];

foreach ($contas as $cpf => $conta) {
    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
}

// for($i=0; $i < count($contas); $i++){
//     echo $contas[$i]['titular'] . PHP_EOL;
// }
