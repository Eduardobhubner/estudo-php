<?php

$conta1 = [
    'titular' => 'Marquinhos',
    'saldo' => 1200
];

$conta2 = [
    'titular' => 'Joana',
    'saldo' => 3400
];

$conta3 = [
    'titular' => 'Kadu',
    'saldo' => 2000
];

$contaCorrente = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contaCorrente); $i++){
    echo $contaCorrente[$i]['titular'] . PHP_EOL;
}



