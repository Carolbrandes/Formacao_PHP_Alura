<?php
namespace classes\funcionarios;
use classes\abstratas\Funcionario;

class Gerente extends Funcionario{
    public function getBonificacao() : float
    {
        return $this->salario * 0.7;
    }
}