<?php

namespace Modelo\Service;

class Mostra
{
    public function mostraDados(string $arquivo)
    {
        $linhas = file($arquivo);

        echo PHP_EOL . PHP_EOL;

        foreach ($linhas as $linha) {

            echo $linha . PHP_EOL;
        }

        echo '----------------' . PHP_EOL . PHP_EOL;

        return;
    }

    public function mostraNomeDoArquivo(string $arquivo)
    {
        echo "Nome do arquivo: $arquivo";

        return;
    }
}
