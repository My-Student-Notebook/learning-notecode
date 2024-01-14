<?php

$curso = 'Design Patterns PHP I: Boas práticas de programação';

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);

/*$arquivo = fopen('cursos-php.txt', 'w');

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso);

modos de esntrada de arquivo:

r, r+, w, w+, a, a+, x, x+. */