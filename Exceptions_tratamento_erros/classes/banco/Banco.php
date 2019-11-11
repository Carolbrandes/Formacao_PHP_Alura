<?php

namespace classes\banco;

use Exception;


class Banco
{
        private $agencias = [];
        private $taxa = 0;

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarAgencia($agencia): void
        {
                $this->agencias[] = $agencia;
        }

        public function atualizarTaxa()
        {
                $totalClientes = 0; 

                foreach ($this->agencias as $agencia) {
                     $totalClientes+= \count($agencia->clientes);
                }

                try {
                        if ($totalClientes < 1) {
                                throw new Exception("Sem registro de agências.");
                        }

                        $this->taxa = 30 / $totalClientes;

                } catch (Exception $erro) {
                        echo $erro->getMessage();
                }
        }

        public function exibeAgencias(): void
        {

                echo "<h2>Lista Agências do banco:</h2>";
                echo "<ul>";

                foreach ($this->agencias as $agencia) {
                        echo "<li>$agencia->codigo</li>";
                }

                echo "</ul>";
        }
}
