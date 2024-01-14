<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpfTitular($cpf);
        $this->cpf = $cpf;
    }

    public function recuperarCpf(): string
    {
        return $this->cpfTitular;
    }
}