<?php

namespace classes\banco;

class Banco{
        private $nome;

        public function __construct(string $nome)
        {
                $this->nome = $nome;
        }

        public function __get($name)
        {
                return $this->$name;
        }
}