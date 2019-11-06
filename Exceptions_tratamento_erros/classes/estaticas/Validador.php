<?php

namespace classes\estaticas;

class Validador
{

        public static function verficaSeAgenciaExiste($codigo, $agencias)
        {
                if (count($agencias) > 0) {
                        foreach ($agencias as  $agencia) {
                                if ($codigo == $agencia->codigo) {
                                        return true;

                                } else {
                                        return false;
                                }
                        }
                } else {
                        return false;
                }
        }

        public static function verificaNumeroDigitosAgencia($codigo){
              return \strlen($codigo) == 4 ? true : false;
        }
}
