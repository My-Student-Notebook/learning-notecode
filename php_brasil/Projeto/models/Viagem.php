<?php

class Viagem
{
    var $origem;
    var $destino;
    var $data_ida;
    var $data_volta;
    var $classe;
    var $adultos;
    var $criancas;
    var $preco;

    public function __construct(
        $origem,
        $destino,
        $data_ida,
        $data_volta,
        $classe,
        $adultos,
        $criancas,
        $preco
    ) {
        if (!$this->dataValida($data_ida)) throw new Exception('Data de ida inválida');

        if (!$this->dataValida($data_volta)) throw new Exception('Data de volta inválida');

        if (!$this->precoValido($preco)) throw new Exception('Preço inválido');

        $this->origem = $origem;
        $this->destino = $destino;
        $this->data_ida = $data_ida;
        $this->data_volta = $data_volta;
        $this->classe = $classe;
        $this->adultos = $adultos;
        $this->criancas = $criancas;
        $this->preco = $this->convertePreco($preco);
    }

    public function dataValida($data)
    {
        if (strlen($data) !== 10)
            return false;

        if (!strpos($data, '-'))
            return false;

        $partes = explode('-', $data);

        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];

        if (strlen($data) < 4)
            return false;

        if (!checkdate($mes, $dia, $ano))
            return false;

        $dataAtual = date('Y-m-d');

        if (strtotime($data) < strtotime($dataAtual))
            return false;

        return true;
    }

    public function precoValido($preco)
    {
        $regex_preco = '/^[0-9]{1,3}([.][0-9]{3})*[,][0-9]{2}$/';
        return preg_match($regex_preco, $preco);
    }

    public function convertePreco($preco)
    {
        $numeroValido = str_replace(',', '.', $preco);
        $numeroValido = str_replace('.', '', substr($numeroValido, 0, -3)) . substr($numeroValido, -3);
        return doubleval($numeroValido);
    }
}
