<?php

$contaCorrente = [
    '123.456.789-01' => [
        'titular' => 'Marquinhos',
        'saldo' => 1200
    ],
    '123.412.389-01' => [
        'titular' => 'Joana',
        'saldo' => 3400
    ],
    '123.412.789-01' => [
        'titular' => 'Kadu',
        'saldo' => 2000
    ]
];

// adicionando um novo dado ao array
$contaCorrente['592.693.159-20'] = [
    'titular' => 'Douglas',
    'saldo' => 7700
];

foreach ($contaCorrente as $chave => $conta) {
    
    echo $chave . " " . $conta['titular'] . PHP_EOL;
}
