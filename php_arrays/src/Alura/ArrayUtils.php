<?php

namespace Alura;

class ArrayUtils
{
    public static function remover($elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if(is_int($posicao)) {
            unset($array[$posicao]);
        }else{
            echo "Não foi encontrado no Array!";
        }
        
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = [];
        foreach($array as $chave => $valor) {
            if($valor > $saldo) {
                $correntistasComSaldoMaior[] = $chave;
            }
        }
        return $correntistasComSaldoMaior;
    }
}