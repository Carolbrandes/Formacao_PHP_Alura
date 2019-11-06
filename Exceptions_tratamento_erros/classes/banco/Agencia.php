<?php

namespace classes\banco;

use classes\estaticas\Validador;


class Agencia
{
        private $codigo;

        public function __construct(Banco $banco, string $codigo)
        {

                if (!Validador::verificaNumeroDigitosAgencia($codigo)) {
                        echo "<p>A agência deve ter quatro dígitos!</p>";
                        echo "<p>Agência digitada: $codigo</p>";
                }


                if (Validador::verficaSeAgenciaExiste($codigo, $banco->agencias)) {
                        echo "<p>Agência $codigo já está cadastrada!</p>";      
                } 
                
                else if (Validador::verificaNumeroDigitosAgencia($codigo) && !Validador::verficaSeAgenciaExiste($codigo, $banco->agencias)) {
                        $this->codigo = $codigo;
                        $banco->adicionarAgencia($this);
                }
        }

        public function __get($name)
        {
                return $this->$name;
        }
}
