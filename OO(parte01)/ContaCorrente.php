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

  public function transferir(float $valor, ContaCorrente $conta): void
  {
    $this->sacar($valor);
    $conta->depositar($valor);
  }

  public function __toString()
  {
    return "Titular: $this->titular <br>
    Ag: $this->agencia <br>
    Cc: $this->conta<br>
    saldo: " . $this->formataSaldo();
  }

  // para acessar fora da classe: $conta1 -> propriedade
  public function __get($propriedade)
  {
    return $this->$propriedade;

    if ($propriedade == "saldo") {
      formataSaldo();
    }
  }

  public function __set($propriedade, $valor)
  {
    // metodo estatico da classe validacao
    Validacao::protegeAtributo($propriedade);
    $this->$propriedade = $valor;
  }

  private function formataSaldo()
  {
    return "R$ " . number_format($this->saldo, 2, ",", ".");
  }

  
}
