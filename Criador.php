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
    public $rg;
    public $dataDeNascimento;
    public $turma;
  }

 ?>
