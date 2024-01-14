<?php

namespace Modelo\Service;

class Escritor extends Mostra
{
    public function escreveArquivo(string $arquivo, string $mensagem)
    {
        echo $mensagem . PHP_EOL;
        file_put_contents($arquivo, fgets(STDIN), FILE_APPEND);

        return;
    }

    public function criaArquivo(string $arquivo)
    {
        if (file_exists($arquivo)) {
            return exit();
        }

        return;
    }

    public function exibeArquivo(string $arquivo)
    {
        $info = new Mostra();
        $info->mostraDados($arquivo);

        return;
    }
}
