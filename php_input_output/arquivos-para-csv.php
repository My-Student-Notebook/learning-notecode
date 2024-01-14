<?php

require 'MeuFiltro_2.php'

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w' );

foreach ($meusCursos as $curso) 
{
	$linha = [trim(utf8_decode($curso)), 'Sim'];

	fputcsv($arquivoCsv, $linha, ';');
}

foreach ($meusCursos as $curso) 
{
	$linha = [trim(utf8_decode($curso)), 'Não'];

	fputcsv($arquivoCsv, $linha, ';');
}