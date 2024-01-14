<?php

$idade = 17;

$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou "; 
echo "a partir de 16 anos acompanhado.". PHP_EOL;

if($idade >= 18) {

	echo "Pode tem $idade anos. Pode entrar sozinho.";

}else if($idade >= 16 && $numeroDePessoas > 1) {

	echo "Você tem $idade anos. Você está acompanhado(a), então pode entrar.";

}else if($idade >= 16 && $numeroDePessoas == 1) {

	echo "Vocé só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";

/*if($idade == 18 || $idade > 18) {

	echo "Pode tem $idade anos." . PHP_EOL;
	echo 'Pode entrar.';

}

  if($idade == 18 && $nome == 'Vinicius') {

	echo "Pode tem $idade anos." . PHP_EOL;
	echo 'Pode entrar.';

}

if($idade == 18 or $idade > 18) {

	echo "Pode tem $idade anos." . PHP_EOL;
	echo 'Pode entrar.';

}*/

