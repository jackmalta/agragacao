<?php
	require 'CartaoDeCredito.php';

	$cartao = new CartaoDeCredito();


	$cliente = new Cliente();
	$cliente->nome = "Juca da Silva";
	$cliente->codigo = 124879;
	$cliente->cartao = $cartao;
	$cliente->cartao->numero = 789789;
	$cliente->cartao->dataDeValidade = "10/2021";





	echo "Dados do Cliente: \nNome: $cliente->nome \tCódigo: $cliente->codigo". PHP_EOL;
	echo "Dados do Cartão do cliente, número: {$cliente->cartao->numero} \tValidade: {$cliente->cartao->dataDeValidade}".PHP_EOL;

 ?>
