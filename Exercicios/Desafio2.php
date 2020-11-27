<?php
//A ideia agora é exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer, e queremos exibir o resultado da sua multiplicação de 1 até 9.
$entrada = 5;
for ($multiplicacao = 1; $multiplicacao <= 9; $multiplicacao++){
    $tabuada = $entrada * $multiplicacao;
    echo "$multiplicacao x $tabuada" . PHP_EOL;
}