<?php

namespace classes\abstratas;

use classes\clientes\Titular;
use classes\banco\Agencia;

abstract class Conta
{
        private $agencia;
        private $numeroConta;
        private $saldo = 0;


        public function __construct(Agencia $agencia, string $numeroConta)
        {
                $this->agencia = $agencia;
                $this->numeroConta = $numeroConta;
        }

        public function __get($atributo)
        {
                return $atributo != "saldo" ? $this->$atributo : "Não é possível exibir o saldo!";
        }

        public abstract function sacar(float $valor);

        public abstract function transferir(float $valor, Conta $conta);

        public function depositar(float $valor):void
        {
                $this->saldo += $valor;
        }

        public function exibirSaldo()
        {
                return number_format($this->saldo, 2, ".", ",");
        }
}
