<?php

namespace classes\estaticas;

class Validador{
        public static function validaValor($valor){
                if(is_numeric($valor) && $valor > 0){
                        return true;
                }

        }
}