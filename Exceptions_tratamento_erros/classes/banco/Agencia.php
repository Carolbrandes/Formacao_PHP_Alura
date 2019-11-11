<?php

namespace classes\banco;

use classes\estaticas\Validador;
use Exception;
use InvalidArgumentException;
use classes\clientes\Titular;

class Agencia
{
        private $banco;
        private $codigo;
        private $clientes = [];

        public function __construct(Banco $banco, string $codigo)
        {

                try{
                        if(!Validador::verificaNumeroDigitosAgencia($codigo)){
                                throw new InvalidArgumentException("A agência deve ter quatro dígitos.");
                        }

                        if(Validador::verficaSeAgenciaExiste($codigo, $banco->agencias)){
                                throw new InvalidArgumentException("Agência já cadastrada!");
                                
                        }

                        $this->banco = $banco;

                        $this->codigo = $codigo;

                        $banco->adicionarAgencia($this);

                }catch(Exception $erro){
                      echo $erro->getMessage();  
                }
             
        }

        public function __get($name)
        {
                return $this->$name;
        }

        public function __toString()
        {
                return $this->codigo;
        }

        public function adicionarCliente(Titular $titular):void {
                $this->clientes[] = $titular;

                $this->banco->atualizarTaxa();

        }

        public function exibeClientes(): void
        {
                echo "<h2>Lista Clientes da Agência $this->codigo:</h2>";
                echo "<ul>";

                foreach ($this->clientes as $cliente) {
                        echo "<li>$cliente->nome</li>";
                }

                echo "</ul>";
        }
}
