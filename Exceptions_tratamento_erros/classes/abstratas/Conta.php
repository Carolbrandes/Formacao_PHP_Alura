<?php

namespace classes\abstratas;

use classes\banco\Agencia;
use classes\banco\Banco;
use classes\clientes\Titular;
use classes\estaticas\Validador;
use Exception;

abstract class Conta
{
        private $banco;
        private $agencia;
        private $numero;
        private $saldo;

        public function __construct(Titular $titular, Agencia $agencia, string $numero)
        {
                $this->agencia = $agencia;
                $this->numero = $numero;
                $this->saldo = 0;
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function depositar(float $valor): void
        {
                if (!Validador::validaValor($valor)) {
                        throw new Exception("Não é possível fazer depósito com o valor inserido.");
                }

                try{
                        $this->saldo += $valor;
                } catch(Exception $erro){
                        echo $erro->getMessage();
                }
        }
}
