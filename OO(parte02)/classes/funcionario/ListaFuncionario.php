<?php

namespace classes\funcionario;

use classes\abstratas\Funcionario;

class ListaFuncionario{
    private $lista;

    public function __construct()
    {
        $this->lista = [];
    }

    public function adicionarFuncionario(Funcionario $funcionario){
        $this->lista = $funcionario;
    }

    public function getListaFuncionario(){
        return $this->lista;
    }
}