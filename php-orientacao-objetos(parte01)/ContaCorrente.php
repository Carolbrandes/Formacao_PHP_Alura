<?php

class ContaCorrente
{
  private $titular;
  private $agencia;
  private $conta;
  private $saldo;

  public function __construct(string $titular, string $agencia, string $conta, float $saldo)
  {
    $this->titular = $titular;
    $this->agencia = $agencia;
    $this->conta = $conta;
    $this->saldo = $saldo;
  }

  public function sacar(float $valor): void
  {
    $this->saldo -= $valor;
  }

  public function depositar(float $valor): void
  {
    $this->saldo += $valor;
  }

  // para acessar fora da classe: $conta1 -> propriedade
  public function __get($propriedade)
  {
    return $this->$propriedade;

    if($propriedade == "saldo"){
      formataSaldo();
    }
  }

  public function __set($propriedade, $value)
  {
    if ($propriedade != "titular" && $propriedade != "saldo") {
      $this->$propriedade = $valor;
    }
  }

  private function formataSaldo()
  {
    return "R$ " . number_format($this->saldo, 2, ",", ".");
  }
}
