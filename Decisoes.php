<?php

$idade = 16;
$acompanhado = 1;

if($idade >= 18 ){
    echo"Você tem 18 anos ou mais pode entrar!";
}else if($idade >= 16 && $acompanhado > 0){
    echo"Você não tem 18 anos ou mais\n mas pode entrar por estar acompanhado e ter 16 anos ou mais!";
}else{
    echo"Você tem menos de 16, não pode entrar!";
}