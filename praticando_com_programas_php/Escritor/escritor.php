<?php

echo "Insira um dado!\n";

$arquivo = fopen('dados.txt', 'a');

$teclado = fgets(STDIN);

fwrite($arquivo, $teclado);