<?php

namespace classes\aluno;

class Aluno
{
        private $nome;
        private $notas;

        public function __construct(string $nome)
        {
              $this->nome = $nome;  
        }

        public function __get($atributo)
        {
              return $this->$atributo;  
        }

        public function adicionarNota(float $nota): void
        {
                $this->notas[] = $nota;
        }

        public function apagarNota(float $nota): void
        {
                $indice = array_search($nota, $this->notas);

                if (is_int($indice)) {
                        unset($this->notas[$indice]);
                } else {
                        echo "A nota $nota não existe";
                }
        }

        private function calcularMedia(): ?float
        {
                $numeroNotas = sizeof($this->notas);

                if ($numeroNotas > 0) {
                        $media = 0;

                        foreach ($this->notas as $nota => $value) {
                                $media += $value;
                        }

                        return number_format($media /= $numeroNotas, 2, '.', ',');
                } else {
                        return null;
                }
        }

        public function exibirNotas(): void
        {
                $numeroNotas = sizeof($this->notas);

                if ($numeroNotas > 0) {
                        sort($this->notas);

                        echo "<h2>Notas:</h2>";

                        foreach ($this->notas as $nota) {
                                echo "<p>$nota</p>";
                        }
                } else {
                        echo "<p>Sem registro de notas.</p>";
                }
        }

        public function exibirMedia(): void
        {
                $media = $this->calcularMedia();

                echo
                        $media != null ?
                                "<p>Media: $media</p>" : "<p>O aluno não tem notas registradas.</p>";
        }
}
