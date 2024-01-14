<?php

class Conta

{
    private string $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular) 
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) 
    {
        if($valorASacar > $this->saldo) {
            echo 'Saldo Indisponível';
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0) {
            echo 'Valor precisa ser positivo';
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATranferir, Conta $contaDestino): void
    {
        if($valorATranferir > $this->saldo) {
            echo 'Saldo Indisponível';
            return;
        }
        $this->sacar($valorATranferir);
        $contaDestino->depositar($valorATranferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->cpf->recuperarCpf();
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}