<?php

class Titular
{
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function recuperarNome(): string
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }
}