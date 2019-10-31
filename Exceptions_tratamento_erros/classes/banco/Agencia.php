<?php

namespace classes\banco;

use classes\clientes\Titular;
use Error;
use Exception;

class Agencia
{
        private $numero;
        private $listaClientes = [];
        private $taxa = 20;

        function __construct(string $numero)
        {
                $this->numero = strlen($numero) == 4 ? $numero : "Número de Agência inválida!";

                $this->definirTaxa();
        }

        function __get($atributo)
        {
                return $this->$atributo;
        }

        public function adicionarCliente(Titular $titular): void
        {
                $this->listaClientes[] = $titular;
        }

        private function definirTaxa()
        {
                $quantidadeCliente = sizeof($this->listaClientes);

                try {
                        $this->taxa =  intDiv($this->taxa, $quantidadeCliente);
                } catch (DivisionByZeroError $erro) {
                        echo "<p>$erro</p>";
                        
                        exit();
                }
        }
}
