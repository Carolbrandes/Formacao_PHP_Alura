<?php

namespace classes\curso;

use classes\aluno\Aluno;

class Curso
{
        private $nome;
        private $alunosMatriculados = [];

        public function __construct(string $nome)
        {
                $this->nome = $nome;
        }

        public function adicionarAluno(Aluno $aluno): void
        {
                $this->alunosMatriculados[] = $aluno;
        }

        public function removerAluno(Aluno $aluno): void
        {
                $indice = array_search($aluno, $this->alunosMatriculados, true);

                if (is_int($indice)) {
                        unset($this->alunosMatriculados[$indice]);
                } else{
                        echo "<p>Aluno não encontrado.</p>";
                }
        }

        public function exibirAlunos(): void
        {
                $alunos = $this->alunosMatriculados;

              
                echo "<h2>Alunos Matriculados</h2>";
                foreach ($alunos as $aluno) {
                        echo "<p>{$aluno->nome} </p>";
                }
        }
}
