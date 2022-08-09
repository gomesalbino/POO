<?php

class ContaCorrente extends Conta
{
    public function percentualTarifa(): float 
    {
        return 0.05;
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
    
}