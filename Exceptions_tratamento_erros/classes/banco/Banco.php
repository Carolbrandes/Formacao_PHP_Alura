<?php

namespace classes\banco;


class Banco{
        private $nome;
        private $listaAgencias;

        public function __construct(string $nome)
        {
                $this->nome = $nome;
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarAgencia (Agencia $agencia): void{
                $this->listaAgencias[] = $agencia;
        }
}