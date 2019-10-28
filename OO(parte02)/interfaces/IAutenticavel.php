<?php

namespace interfaces;
use classes\abstratas\FuncionarioAutenticavel;

interface IAutenticavel{

    public function autenticar(FuncionarioAutenticavel $funcionario, $senha);
}