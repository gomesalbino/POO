
<?php

class Desenvolvidor extends Funcionario
{
    public function soubeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
    public function calculaBonificacao(): float 
    {
        return 500.0;
    }
}