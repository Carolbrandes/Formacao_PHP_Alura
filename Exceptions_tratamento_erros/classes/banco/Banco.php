<?php

namespace classes\banco;

class Banco
{
        private $agencias = [];

        public function __get($name)
        {
                return $this->$name;
        }

        public function adicionarAgencia($agencia):void{
                $this->agencias[] = $agencia;
        }

        public function exibeAgencias(): void
        {
                echo "<h2>Lista Agências:</h2>";
                echo "<ul>";

                foreach ($this->agencias as $agencia) {
                        echo "<li>$agencia->codigo</li>";
                }

                echo "</ul>";
        }
}
