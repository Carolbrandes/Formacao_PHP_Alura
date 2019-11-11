<?php

namespace classes\abstratas;

use classes\banco\Banco;
use classes\banco\Agencia;
use classes\estaticas\Validador;
use Exception;
use InvalidArgumentException;

abstract class Conta
{
        private $banco;
        private $agencia;
        private $numero;
        private $tipoConta;
        private $saldo;

        public function __construct(Banco $banco, Agencia $agencia, string $numero, string $tipoConta)
        {

                $this->banco = $banco;
                $this->agencia = $agencia;
                $this->numero = $numero;
                $this->tipoConta = $tipoConta;
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function depositar(float $valor): void
        {
                try {
                        if (!Validador::verificaValor($valor)) {
                                throw new InvalidArgumentException("Valor para depósito é inválido, não pode ser valor negativo!");
                        }

                        $this->saldo += $valor;
                } catch (Exception $erro) {
                        echo $erro->getMessage();
                }
        }

        public abstract function sacar(float $valor): void;
}
