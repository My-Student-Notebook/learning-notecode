<?php

function depositar (array $conta, float $valorADepositar) {

    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem('Depositos precisam ser positivos');
    }  
   
    return $conta; 
}

function sacar(array $conta, float $valorASacar) {

    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;

}

function exibeMensagem(string $mensagem) {

   // echo $mensagem . PHP_EOL;
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}