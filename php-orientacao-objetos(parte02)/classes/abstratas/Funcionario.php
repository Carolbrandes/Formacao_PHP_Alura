<?php

namespace classes\abstratas;

abstract class Funcionario{
    private $nome;
    private $cpf;
    private $salario;

    public function __construct(string $nome, string $cpf, float $salario)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    // public function __set($atributo, $valor)
    // {
        
    //     $this->$atributo = $valor;
    // }

    abstract public function getBonificacao() : float;

    public function aumentarSalario(float $porcentagem) : void{
        $this->salario *= ($porcentagem / 100 + 1);
    }
}