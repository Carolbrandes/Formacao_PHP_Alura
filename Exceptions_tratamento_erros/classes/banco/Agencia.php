<?php

namespace classes\banco;

use classes\clientes\Titular;
use classes\banco\Banco;

class Agencia{
        private $codigo;
        private $listaCliente;

        public function __construct(string $codigo, Banco $banco)
        {
                $this->codigo = $codigo;
                $banco->adicionarAgencia($this);
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarCliente(Titular $titular):void{
                $this->listaCliente[] = $titular;
        }

}