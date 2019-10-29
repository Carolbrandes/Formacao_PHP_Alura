<?php

namespace classes\aluno;

class Aluno
{
        public $notas;
        public $media;

        public function adicionarNota(float $nota) : void
        { 
                $this->notas[] = $nota;
        }

        public function calcularMedia() : ?float
        {
                $numeroNotas = sizeof($this->notas);

                if($numeroNotas > 0){
                        $media = 0;
        
                        foreach ($this->notas as $nota => $value) {
                                $media += $value;
                        }
        
                        return number_format( $media /= $numeroNotas, 2, '.', ',');
                }else{
                        return null;
                }
        }
}
