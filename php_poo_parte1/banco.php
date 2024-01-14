<?php

require_once 'src/Conta.php';
require_once 'src/Cpf.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$segundaConta = new Conta(new Titular(new Cpf('598.549.548-10'), 'Patricia'));

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo Conta::$numeroDeContas;