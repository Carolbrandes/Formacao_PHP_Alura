<?php

namespace classes\abstratas;

abstract class FuncionarioAutenticavel extends Funcionario{
    private $senha;

    public function autenticar($senha) : bool{
        return $this->senha == $senha ? true : false;
    }

    public function __set($name, string $value)
    {
        $this->$name = $value;
    }
}
