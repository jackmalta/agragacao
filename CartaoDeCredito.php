<?php
  class CartaoDeCredito
  {
    public $numero;
    public $dataDeValidade;
  }

  class Cliente
  {
    public $nome;
    public $codigo;

    function __construct($x, $y)
    {
      $this->nome = $x;
      $this->codigo = $y;
    }

  }

  class Agencia
  {
    public $numero;
    public $endereco;
  }

  class Conta
  {
    public $numero;
    public $saldo;
    public $limite;
  }

 ?>
