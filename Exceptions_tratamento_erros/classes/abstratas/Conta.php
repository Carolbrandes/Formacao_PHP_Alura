<?php 

namespace classes\abstratas;

use classes\banco\Agencia;
use classes\banco\Banco;
use classes\clientes\Titular;

abstract class Conta{
        private $banco;
        private $agencia;
        private $numero;

        public function __construct(Titular $titular, Banco $banco, Agencia $agencia, string $numero)
        {
                $this->banco = $banco;
                $this->agencia = $agencia;
                $this->numero = $numero;
        }

        public function __get($name)
        {
                return $this->$name;
        }
}