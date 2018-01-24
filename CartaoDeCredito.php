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



  }

  class Agencia
  {
    public $numero;
    public $endereco;

    function __construct($n)
    {
      $this->numero = $n;
    }
  }

  class Conta
  {
    public $numero;
    public $saldo;
    public $limite;
    public $agencia;


    function __construct($agencia)
    {
      $this->agencia = $agencia;
    }
  }

 ?>
