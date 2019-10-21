<?php

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

// add uma nova conta
$contas['444.444.444-44'] = [
    'titular' => 'Claudia',
    'saldo' => 3400
];

// removendo uma conta
unset($contas['444.444.444-44']);


// sacando um valor
// 1) acessando a conta pelo cpf > $contas['111.111.111-11'], teria um papel de variavel.

$contas['111.111.111-11'] = sacar($contas['111.111.111-11'], 500);

// depositando valor:
$contas['222.222.222-22'] = depositar($contas['222.222.222-22'], 800);

//colocaLetraMaiuscula($contas['3333.3333.333-33']);


    // string simples (só tirar as aspas de dentro do colchete)
    // "$cpf : $conta[titular] possui R$ $conta[saldo].";
    // string complexa, colocar {} antes do valor($conta):
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Contas:</h1> 

   <ul>
       <?php 
            foreach ($contas as $cpf => $conta) {
                ['titular' => $titular, 'saldo' => $saldo] = $conta;
       ?>

        <li>
           CPF: <?php echo $cpf; ?> /
           NOME: <?php echo $titular; ?> /
           SALDO: R$ <?php echo $saldo; ?> 
        </li>

            <?php }// fim do foreach ?>
   </ul>
</body>
</html>
