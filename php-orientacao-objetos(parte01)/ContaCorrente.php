<?php

class ContaCorrente{
    public $titular;
    public $agencia;
    public $conta;
    public $saldo;

    public function __construct($titular, $agencia, $conta, $saldo)
    {
      $this->titular = $titular;
      $this->agencia = $agencia;
      $this->conta = $conta;
      $this->saldo = $saldo;  
    }
}