<?php

require_once 'funcoes.php' ;

$contaCorrente = [
    '123.456.789-01' => [
        'titular' => 'Maria',
        'saldo' => 1800
    ],
    '123.412.389-01' => [
        'titular' => 'Alberto',
        'saldo' => 1000
    ],
    '123.412.789-01' => [
        'titular' => 'Vinicius',
        'saldo' => 2000
    ]
];

$contaCorrente['123.412.389-01'] = sacar($contaCorrente['123.412.389-01'], 800);
$contaCorrente['123.412.789-01'] = depositar($contaCorrente['123.412.789-01'], -1000);
titularComLetraMaiuscula($contaCorrente['123.456.789-01']);

unset($contaCorrente[ '123.412.789-01']);

foreach ($contaCorrente as $chave => $conta) {

    ['titular' => $titular , 'saldo' => $saldo] = $conta;
    exibeMensagem("$chave $titular $saldo");
}
