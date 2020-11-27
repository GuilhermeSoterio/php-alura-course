<?php
//O primeiro desafio será executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($numeros = 0; $numeros <= 100; $numeros++){
    if ($numeros % 2!==0){
        echo "#$numeros" . PHP_EOL;
    }

}
