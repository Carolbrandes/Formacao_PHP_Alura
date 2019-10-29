<?php

namespace classes\abstratas;

abstract class Funcionario
{
    private $nome;
    private $cpf;
    private $salario;
    private $percentualBonificacao;
    const pisoSalarial = 980;
   

    public function __construct(string $nome, string $cpf, float $salario = self::pisoSalarial, float $percentualBonificacao)
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

    final public function aumentarSalario(): void
    {
        $this->salario *= 1.3;
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
