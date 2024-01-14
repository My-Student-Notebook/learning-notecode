<?php

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(', ', $nomes);

foreach ($array_nomes as $nome) {
    echo "\nOlá $nome";
}

$nomesJuntos = implode(', ', $array_nomes);