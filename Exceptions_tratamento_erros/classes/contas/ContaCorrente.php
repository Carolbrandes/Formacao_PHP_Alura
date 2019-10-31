<?php

namespace classes\contas;

use classes\abstratas\Conta;

class ContaCorrente extends Conta
{

        public function sacar(float $valor): void
        {
                $this->saldo -=  $valor > 5000 ? ($valor + $this->agencia->taxa) : $valor;
        }

        public function transferir(float $valor, Conta $conta)
        {
                $this->saldo -= $valor > 20000 ?
                ($valor + $this->agencia->taxa * 1.1) :
                $valor;
         }
}
