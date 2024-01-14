<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Pontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao($conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
