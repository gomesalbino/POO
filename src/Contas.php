<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroConta = 0;

    public function  __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroConta++;
    }

    public function __destruct()
    {
        self::$numeroConta--;
    }

    public function sacar(float $valorASacar)
    {
    if ($valorASacar > $this->saldo){
        echo "Você não tem saldo suficiente para saque!";
    }else{
        $this->saldo -= $valorASacar;
    }
    }

    public function depositar( float $valorADepositar) : void
    {
        if($valorADepositar < 0){
            echo "Deposito somente com numeros positivos.";
        }else{
            $this->saldo += $valorADepositar;
        }
    }

    public function transferencia(float $valorATransferir, Conta $contaDestino) : void
    {
    if ($valorATransferir > $this->saldo){
        echo "Saldo insuficiente para transferencia!";
        return;
    }
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
    }
    
    public function recuperaCpfTitular(): string 
    {
        return $this->titular->recuperaCpf();
    }
    public function recuperaNomeTitular(): string 
    {
        return $this->titular->recuperaNome();
    }
   
    public function recuperaSaldo() : float
    {
        return $this->saldo;
    }
    
   public static function recuperaNumeroConta() : int 
   {
    return self::$numeroConta;
   }
}