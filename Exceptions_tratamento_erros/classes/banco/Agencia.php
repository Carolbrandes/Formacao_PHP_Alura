<?php

namespace classes\banco;

use classes\clientes\Titular;

class Agencia{
        private $codigo;
        private $listaCliente;

        public function __construct(string $codigo)
        {
                $this->codigo = $codigo;
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarCliente(Titular $titular){
                $this->listaCliente[] = $titular;
        }
}