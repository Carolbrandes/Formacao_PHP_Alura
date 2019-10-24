<?php

namespace classes\funcionarios;

class Funcionario{
    private $nome;
    private $cpf;
    private $salario;

    public function __construct(string $nome, string $cpf, float $salario)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}