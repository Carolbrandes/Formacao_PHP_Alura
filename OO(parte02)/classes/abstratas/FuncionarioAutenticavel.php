<?php

namespace classes\abstratas;

class FuncionarioAutenticavel extends Funcionario
{
    protected $senha;

    public function definirSenha($senha): void
    {
        $this->senha = $senha;
    }
    

    

    
}
