<?php

require_once 'ValidadorCPF.php';
require_once 'ValidadorCNPJ.php';

class Cliente
{
    var $nome;
    var $cpf_cnpj;
    var $telefone;
    var $email;
    var $cep;
    var $endereco;
    var $bairro;
    var $numero;
    var $cidade;
    var $uf;

    public function __construct(
        $nome,
        $cpf_cnpj,
        $telefone,
        $email,
        $cep,
        $endereco,
        $bairro,
        $numero,
        $cidade,
        $uf
    ) {
        $validador = new ValidadorCPF();
        $validador1 = new ValidadorCNPJ();

        if (!$this->cepValido($cep)) throw new Exception('CEP no formato inválido');

        if (!$this->telefoneValido($telefone)) throw new Exception('Telefone no formato inválido');

        if (!$this->emailValido($email)) throw new Exception('Email no formato inválido');

        if (strlen($cpf_cnpj) >= 14) {
            if (!$validador1->ehValido_1($cpf_cnpj)) throw new Exception('CNPJ inválido');
        } else {
            if (!$validador->ehValido($cpf_cnpj)) throw new Exception('CPF inválido');
        }




        $this->nome = $nome;
        $this->cpf_cnpj = $cpf_cnpj;
        $this->cpf_cnpj = $this->removerFormatacao($cpf_cnpj);
        $this->telefone = $telefone;
        $this->telefone = $this->removerFormatacao($telefone);
        $this->email = $email;
        $this->cep = $cep;
        $this->cep = $this->removerFormatacao($cep);
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->cidade = $cidade;
        $this->uf = $uf;
    }

    public function cepValido($cep)
    {
        if (strlen($cep) === 10) {
            $regex_cep = "/^[0-9]{2}\.[0-9]{3}\-[0-9]{3}$/";
            return preg_match($regex_cep, $cep);
        } else {
            return false;
        }
    }

    public function telefoneValido($telefone)
    {
        if (strlen($telefone) === 15) {
            $regex_telefone = "/^\([0-9]{2}\)[0-9]{5}\-[0-9]{4}$/";
            return preg_match($regex_telefone, str_replace(' ', '', $telefone));
        } else {
            return false;
        }
    }

    public function emailValido($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function emailValido2($email)
    {
        if (strlen($email) === 40) {
            $regex_email = "/^[a-z0-9]{20}\@[a-z]{10}\.[a-z]{3}\.[a-z]{2}$/";
            $regex_email2 = "/^[a-z]{17}\.[0-9]{3}\@[a-z]{10}\.[a-z]{3}\.[a-z]{2}$/";
            if ($email === $regex_email || $regex_email) {
                return preg_match($regex_email || $regex_email2, $email);
            } else {
                return false;
            }
        }
    }

    public function removerFormatacao($info)
    {
        $dado = str_replace(['.', '/', '-', '(', ')', ' '], '', $info);
        return $dado;
    }
}
