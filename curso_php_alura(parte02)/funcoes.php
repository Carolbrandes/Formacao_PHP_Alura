<?php

function sacar(array $conta, float $valor) : array
{
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não possui saldo suficiente para realizar esse saque!");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

 function depositar(array $conta, float $valor) : array{
     if($valor > 0){
         $conta['saldo'] += $valor;
     }else{
         exibeMensagem("Não é possível depositar valores negativos!");
     }

     return $conta;
 }


function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

// para passarmos a referencia ou seja o elemento mesmo temos que passar o endereço de memoria dele e para isso utilizamos o & na frente da variavel.
function colocaLetraMaiuscula(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}



