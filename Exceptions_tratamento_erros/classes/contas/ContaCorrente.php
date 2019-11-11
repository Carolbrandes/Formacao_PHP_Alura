<?php

namespace classes\contas;

use classes\abstratas\Conta;
use classes\estaticas\Validador;
use InvalidArgumentException;

class ContaCorrente extends Conta
{


        public function sacar(float $valor): void
        {

                try {
                        if (!Validador::verificaValor($valor)) {
                                throw new \Exception("Valor para saque é inválido, não pode ser valor negativo!");
                        }

                        if($this->saldo < ($valor + $this->banco->taxa)){
                                throw new InvalidArgumentException("Saldo é insuficiente para saque");
                        }

                        $this->saldo -= ($valor + $this->banco->taxa) ;

                } catch (\Exception $erro) {
                        echo $erro->getMessage();
                }
        }
}
