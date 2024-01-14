<?php

require_once 'autoload.php';

use Modelo\Service\{Mostra, Escritor};

$mostra = new Mostra();
$mostra->mostraNomeDoArquivo('cursos-concluidos.txt');
$mostra->mostraDados('cursos-concluidos.txt');

$mostra->mostraNomeDoArquivo('linguagens-aprendidas.txt');
$mostra->mostraDados('linguagens-aprendidas.txt');

/*$mostra = new Escritor();
$mostra->criaArquivo('linguagens-aprendidas.txt');
$mostra->escreveArquivo('linguagens-aprendidas.txt', 'Escreva uma linguagem já apreendida!');*/

$mostra = new Escritor();
$mostra->criaArquivo('cursos-concluídos.txt');
$mostra->escreveArquivo('cursos-concluidos.txt', 'Insira outro nome de um curso já concluído!');
