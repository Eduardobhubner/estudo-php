<?php

$array =  [
    1 => 'a',
    '1' => 'b', //sempre vai tentar converter de string para integer
    1.5 => 'c', //float vai ser convertido para integer
    true => 'd', //true vai ser convertido para 1
];

//para saber mais sobre conversão em php: https://www.php.net/manual/pt_BR/language.types.array.php

foreach ($array as $value) {
    echo $value . PHP_EOL;
}
