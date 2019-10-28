<?php

class Validacao
{
    public static function protegeAtributo($propriedade)
    {
        if ($propriedade == "titular" || $propriedade == "saldo") {
            throw new Exception("O atributo $propriedade continua privado.");
        }
    }
}
