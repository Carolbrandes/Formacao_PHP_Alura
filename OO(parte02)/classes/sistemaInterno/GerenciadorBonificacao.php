<?php

namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\abstratas\FuncionarioAutenticavel;
use interfaces\IAutenticavel;

class GerenciadorBonificacao implements IAutenticavel
{
    private $totalBonificacoes;

    public function __construct()
    {
        $this->totalBonificacoes = 0;
    }

    public function autenticar(FuncionarioAutenticavel $funcionario, $senha)
    {
        return $funcionario->senha == $senha ? true : false;
    }

    public function registrarBonificacao(FuncionarioAutenticavel $funcionario, $senha, Funcionario $funcionario02)
    {
    
        if($this->autenticar($funcionario, $senha) == 1){
           $this->totalBonificacoes += $funcionario02->calculoBonificacao();
        } else{
            echo "Fazer login!";
        }
    }



    public function getTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}
