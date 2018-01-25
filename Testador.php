<?php
  require 'Criador.php';

  $turma = new Turma("B");
  $turma->periodo = "Noturno";
  $turma->serie = "2 Ano";
  $turma->tipoDeEnsino = "Médio";

  $aluno = new Aluno();
  $aluno->nome = "Juca";
  $aluno->rg = 487452313;
  $aluno->dataDeNascimento = "12/10/2001";
  $aluno->turma = $turma;

  $aluno2 = new Aluno();
  $aluno2->nome = "Ana";
  $aluno2->rg = 45874523;
  $aluno2->dataDeNascimento = "12/10/2000";
  $aluno2->turma = $turma;

  $aluno3 = new Aluno();
  $aluno3->nome = "Xao";
  $aluno3->rg = 23548789;
  $aluno3->dataDeNascimento = "10/11/2001";
  $aluno3->turma = $turma;


  echo "Dados do Aluno:
        Nome: $aluno->nome \tCódigo: $aluno->codigo \tRG: $aluno->rg \tData de Nascimento: $aluno->dataDeNascimento
        Turma: {$aluno->turma->serie} {$aluno->turma->sigla} \tPeríodo: {$aluno->turma->periodo}
        Ensino: {$aluno->turma->tipoDeEnsino}".PHP_EOL;

  echo "Dados do Aluno:
        Nome: $aluno2->nome \tCódigo: $aluno2->codigo \tRG: $aluno2->rg \tData de Nascimento: $aluno2->dataDeNascimento
        Turma: {$aluno2->turma->serie} {$aluno2->turma->sigla} \tPeríodo: {$aluno2->turma->periodo}
        Ensino: {$aluno2->turma->tipoDeEnsino}".PHP_EOL;

  echo "Dados do Aluno:
        Nome: $aluno3->nome \tCódigo: $aluno3->codigo \tRG: $aluno3->rg \tData de Nascimento: $aluno3->dataDeNascimento
        Turma: {$aluno2->turma->serie} {$aluno2->turma->sigla} \tPeríodo: {$aluno2->turma->periodo}
        Ensino: {$aluno2->turma->tipoDeEnsino}".PHP_EOL;


  echo $aluno->zerar();
 ?>
