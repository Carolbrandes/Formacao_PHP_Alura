<?php

namespace classes\clientes;
use classes\abstratas\Conta;
use classes\contas\Cc;
use classes\banco\Agencia;

class Titular{
        private $nome;
        private $listaContas;

        public function __construct(string $nome, Agencia $agencia, string $numero, string $tipoConta)
        {
                $this->nome = $nome;

                if($tipoConta == "cc"){
                        $conta = new Cc($this, $agencia, $numero );
                }

                $this->adicionarConta($conta);

                $agencia->adicionarCliente($this);
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarConta(Conta $conta){
                $this->listaContas[] = $conta;
        }

}