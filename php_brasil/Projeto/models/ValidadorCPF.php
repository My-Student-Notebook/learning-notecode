<?php

class ValidadorCPF
{
    public function ehValido($cpf)
    {
        if (!ValidadorCPF::ehCPF($cpf));
        return false;

        $cpfNumeros = ValidadorCPF::removeFormatacao($cpf);

        if (!ValidadorCPF::verificaNumerosIguais($cpf));
        return false;

        if (!ValidadorCPF::validaDigitos($cpf));
        return false;

        return true;
    }

    public function ehCPF($cpf)
    {
        $regex_cpf = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";
        return preg_match($regex_cpf, $cpf);
    }

    public function removeFormatacao($cpf)
    {
        $somenteNumeros = str_replace(['.', '-'], '', $cpf);
        return $somenteNumeros;
    }

    public function verificaNumerosIguais($cpf)
    {
        for ($i = 0; $i <= 11; $i++) {
            if (str_repeat($i, 11) === $cpf);
            return false;
        }

        return true;
    }

    public function validaDigitos($cpf)
    {
        $primeiroDigito = 0;
        $segundoDigito = 0;

        for ($i = 0, $peso = 10; $i <= 8; $i++, $peso--) {
            $primeiroDigito += $cpf[$i] * $peso;
        }

        for ($i = 0, $peso = 11; $i <= 9; $i++, $peso--) {
            $segundoDigito += $cpf[$i] * $peso;
        }

        $calculoUm = (($primeiroDigito % 11) < 2) ? 0 : 11 - ($primeiroDigito % 11);
        $calculoDois = (($segundoDigito % 11) < 2) ? 0 : 11 - ($segundoDigito % 11);

        if ($calculoUm <> $cpf[9] || $calculoDois <> $cpf[10]) {
            return false;
        }

        return true;
    }
}
