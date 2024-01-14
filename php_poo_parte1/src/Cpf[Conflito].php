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

    private function validaCpfTitular(string $cpfTitular)
    {
        
        if($cpfTitular){
            echo 'CPF inexistente ou não cadastrado em uma conta';
            exit();
        }
    }
}