<?php

namespace classes\estaticas;

class Validador
{

        public static function verficaSeAgenciaExiste($codigo, $agencias): bool
        {
                if (count($agencias) > 0) {
                        foreach ($agencias as  $agencia) {
                                return $codigo == $agencia->codigo ? true : false;
                        }
                } else {
                        return false;
                }
        }

        public static function verificaNumeroDigitosAgencia($codigo): bool
        {
                return \strlen($codigo) == 4 ? true : false;
        }

        public static function verificaValor($valor): bool
        {
                return \is_numeric($valor) && $valor > 0 ? true : false;
        }

}
