<?php 
 //construção de um programa que, a partir de uma $altura e de um $peso, calculasse o IMC e exibisse se a pessoa está com o peso dentro, abaixo ou acima do recomendado.

$peso = 60;
$altura = 1.74;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";