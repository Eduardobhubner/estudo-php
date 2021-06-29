<?php 

function exibeMensagem($mensagem)
{
    echo  $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array
{
    if ($valor > $conta['saldo']) {
        exibeMensagem("você não pode fazer esse saque");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if ($valor < 0) {
        exibeMensagem("Não é possível fazer depósito de valor negativo");
    } else {
        $conta['saldo'] += $valor;
    }

    return $conta;
}

function titularComLetraMaiuscula(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}