<?php

class Conta
{
public string $cpf;
public string $titularConta;
public float $saldo;

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

}