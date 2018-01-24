<?php
	require 'CartaoDeCredito.php';
	require 'Lib/Carbon.php';
	use Carbon\Carbon;

	$conta = new Conta();
	$conta->agencia = $agencia = new Agencia();

	$cliente = new Cliente();
	$cliente->nome = "Juca da Silva";
	$cliente->codigo = 124879;
	$cliente->cartao = $cartao = new CartaoDeCredito();;
	$cliente->cartao->numero = 789789;
	$cliente->cartao->dataDeValidade = Carbon::createFromDate(2022, 03, 7);
	$cliente->conta = $conta;
	$cliente->conta->numero = $cartao->numero;
	$cliente->conta->saldo = 900;
	$cliente->conta->limite = 700;
	$cliente->conta->agencia->numero = 153;
	$cliente->conta->agencia->endereco = "Rua dos andes 158";






	echo "Dados do Cliente: \nNome: $cliente->nome \tCódigo: $cliente->codigo".PHP_EOL;
	echo "número do Cartão: {$cliente->cartao->numero} \tValidade: {$cartao->dataDeValidade->format('d/m/Y')}" . PHP_EOL;
	echo "Saldo: {$cliente->conta->saldo} \tLimite: {$cliente->conta->limite}".PHP_EOL;
	echo "Número da conta: {$cliente->conta->numero} \tNúmero da agência: {$cliente->conta->agencia->numero}".PHP_EOL;



 ?>
