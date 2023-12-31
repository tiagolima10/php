<?php

function sacar(array $conta, float $valorASacar) : array 
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar; 
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Valor negativo!");
    }
    return $conta;
}

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . '<br>';
}

//passagem por referencia com & muda o valor original da variavel
function letrasMaiusculas(array &$conta) 
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;  
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}