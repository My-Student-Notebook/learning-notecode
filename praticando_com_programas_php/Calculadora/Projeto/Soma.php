<?php

namespace Projeto;

class Soma
{
    public int $valor;
    public int $valor1;
    protected int $resultado;

    public function __construct($valor, $valor1)
    {
        $this->valor = $valor;
        $this->valor1 = $valor1;
        $this->recuperaResultado();
    }

    public function recuperaResultado(): int
    {
        $this->resultado = $this->valor + $this->valor1;
        return $this->resultado;
    }
}