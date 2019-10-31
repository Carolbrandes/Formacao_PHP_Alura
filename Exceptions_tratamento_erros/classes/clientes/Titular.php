<?php

namespace classes\clientes;

use classes\abstratas\Conta;

class Titular
{
        private $nome;
        private $cpf;
        private $listaConta = [];

        function __construct(string $nome, string $cpf, Conta $conta)
        {
                $this->nome = $nome;
                $this->cpf = $cpf;
                $this->adicionarConta($conta);

                $conta->agencia->adicionarCliente(this);
        }

        function __get($atributo)
        {
                return $this->$atributo;
        }

        public function alterarNome(string $nome): void
        {
                $this->nome = $nome;
        }

        public function adicionarConta(Conta $conta): void
        {
                $this->listaConta[] = $conta;
        }
}
