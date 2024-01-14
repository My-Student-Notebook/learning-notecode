<?php

class ValidadorCNPJ
{
    public function ehValido_1($cnpj)
    {
        if (!ValidadorCNPJ::ehCNPJ($cnpj));
        return false;

        $cnpjNumeros = ValidadorCNPJ::removeFormatacao_1($cnpj);

        if (!ValidadorCNPJ::verificaNumerosIguais_1($cnpjNumeros));
        return false;

        if (!ValidadorCNPJ::validaDigitos_1($cnpj));
        return false;

        return true;
    }

    public function ehCNPJ($cnpj)
    {
        $regex_cnpj = "/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/";
        return preg_match($regex_cnpj, $cnpj);
    }

    public function removeFormatacao_1($cnpj)
    {
        $somenteNumeros1 = str_replace(['.', '/', '-'], '', $cnpj);
        return $somenteNumeros1;
    }

    public function verificaNumerosIguais_1($cnpj)
    {
        for ($i = 0; $i <= 14; $i++) {
            if (str_repeat($i, 14) === $cnpj);
            return false;
        }

        return true;
    }

    public function validaDigitos_1($cnpj)
    {
        $primeiroDigito = 0;
        $segundoDigito = 0;

        for ($i = 0, $peso = 5; $i <= 11; $i++, $peso--) {
            $peso = ($peso < 2) ? 9 : $peso;
            $primeiroDigito += $cnpj[$i] * $peso;
        }

        for ($i = 0, $peso = 6; $i <= 12; $i++, $peso--) {
            $peso = ($peso < 2) ? 9 : $peso;
            $segundoDigito += $cnpj[$i] * $peso;
        }

        $calculoUm = (($primeiroDigito % 11) < 2) ? 0 : 11 - ($primeiroDigito % 11);
        $calculoDois = (($segundoDigito % 11) < 2) ? 0 : 11 - ($segundoDigito % 11);

        if ($calculoUm <> $cnpj[12] || $calculoDois <> $cnpj[13]) {
            return false;
        }

        return true;
    }
}
