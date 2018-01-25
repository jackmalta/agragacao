<?php
  class Turma
  {
    public $periodo;
    public $serie;
    public $sigla;
    public $tipoDeEnsino;

    function __construct($sigla)
    {
      $this->sigla = $sigla;
    }
  }

  class Aluno
  {
    public $nome;
    public $codigo;
    public $rg;
    public $dataDeNascimento;
    public $turma;
    public static $contador = 0;

    function __construct()
    {
      self::$contador++;
      $this->codigo = self::$contador;
    }

    function zerar()
    {
      echo "Total de alunos criados: ".self::$contador.PHP_EOL;
      self::$contador = 0;

    }

  }

 ?>
