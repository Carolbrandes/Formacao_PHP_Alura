<?php

namespace classes\abstratas;

abstract class Funcionario
{
    private $nome;
    private $cpf;
    private $salario;
    private $percentualBonificacao;
   

    public function __construct(string $nome, string $cpf, float $salario, float $percentualBonificacao)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
        $this->percentualBonificacao = $percentualBonificacao;
       
    }


    public function alterarNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function aumentarSalario(float $porcentagem): void
    {
        $this->salario *= ($porcentagem / 100 + 1);
    }

    public function alterarBonificacao(float $porcentagem) : void{
        $this->percentualBonificacao = $porcentagem;
    }

    
    public function calculoBonificacao() : float{
        return $this->salario * ($this->percentualBonificacao / 100);
  
    }


    public function __get($propriedade)
    {
        return $this->$propriedade;
    }
}
