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

  echo "Dados do Aluno:
        Nome: $aluno->nome \tRG: $aluno->rg \tData de Nascimento: $aluno->dataDeNascimento
        Turma: {$aluno->turma->serie} {$aluno->turma->sigla} \tPeríodo: {$aluno->turma->periodo}
        Ensino: {$aluno->turma->tipoDeEnsino}".PHP_EOL;

 ?>
