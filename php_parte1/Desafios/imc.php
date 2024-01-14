<?php

$altura = 1.88;

$peso = 75;

$imc = $peso / $altura ** 2;

echo "Seu IMC é: $imc" . PHP_EOL;

if($imc < 18.5) {
	echo "Você está com a classificação de magreza e obesidade de grau 0!"; 
} else if ($imc >= 18.5 and $imc <= 24.9) {
	echo "Você está com a classificação de normalidade e obesidade de grau 0!";
} else if ($imc >= 25.0 and $imc <= 29.9) {
	echo "Você está com a classificação de sobrepeso e obesidade de grau 1!";
} else if ($imc >= 30.0 and $imc <= 39.9) {
	echo "Você está com a classificação de obesidade e obesidade de grau 2!";
} else if ($imc > 40.0) {
	echo "Você está com a classificação de obesidade grave e obesidade de grau 3!";
}