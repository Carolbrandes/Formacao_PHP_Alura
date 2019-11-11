<?php

namespace classes\clientes;
use classes\abstratas\Conta;

class Titular{
        private $nome;
        private $cpf;
        private $contas = [];

        public function __construct(string $nome, string $cpf, Conta $conta)
        {
                $this->nome = $nome;
                $this->cpf = $cpf;   
                $this->adicionarConta($conta);

               $conta->agencia->adicionarCliente($this);
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarConta(Conta $conta):void
        {
              $this->contas[$conta->numero] = $conta;
        }

        public function exibeContas(): void
        {
                echo "<h2>Lista Contas do(a) $this->nome:</h2>";
                echo "<ul>";

                foreach ($this->contas as $conta) {
                       echo "<li>Agencia: $conta->agencia / $conta->tipoConta: $conta->numero  </li>";
                }

                echo "</ul>";
        }


}