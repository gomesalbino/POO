<?php

// namespace Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
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

    public function sacar(float $valorASacar): void
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();   
        $valorDoSaque += $valorASacar + $tarifaDeSaque;
    if ($valorDoSaque > $this->saldo){
        echo "Você não tem saldo suficiente para saque!";
    }else{

        $this->saldo -= $valorDoSaque;
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
  abstract protected function percentualTarifa(): float ;
}