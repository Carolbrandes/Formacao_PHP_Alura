<?php
namespace classes\funcionarios;
use classes\funcionarios\AutenticacaoFuncionario;

class Diretor extends FuncionarioAutenticavel
{
    public function getBonificacao() : float
    {
        return $this->salario * 0.9;
    }
}
