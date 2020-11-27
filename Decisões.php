<?php

$idade = 16;
$nome = 'guilherme';
$numeroDePessoas = 1;


/*if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
}pode usar and e or. invés de && ||*/
echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;
if ($idade >= 40 && $nome == 'guilherme'){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
}
//If com else
if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
//Utilizando if-else em cadeias longas.
if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
} else {
    if ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você só tem $idade anos. está acompanhado, então pode entrar";
    }else {
            echo "Você só tem $idade anos. Você não pode entrar";
    }
}